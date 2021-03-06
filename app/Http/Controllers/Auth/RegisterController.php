<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\User\UserAccount;
use App\Models\User\UserPro;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => ['required', Rule::in(['resabillet1'])],
            'type_cpt' => ['required'],
            'address' => ['required_if:type_cpt,5'],
            'postal' => ['required_if:type_cpt,5'],
            'city' => ['required_if:type_cpt,5'],
            'phone' => Rule::phone()->country(['FR', 'BE', 'US']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //dd($data);
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->createAsStripeCustomer();
        $this->registerUserAccount($data, $user->id);
        if($data['type_cpt'] != 5) {
            $pro = $this->registerPro($data);
            $this->registerUserAccount($data, $user->id, $pro->id);
        }

        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        /*if ($response = $this->registered($request, $user)) {
            return $response;
        }*/

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect()->route('account.subscribe');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showRegistrationForm()
    {
        return view('account.auth.register');
    }

    private function registerPro($data)
    {
        return UserPro::create([
            'type' => ($data['type_cpt'] >= 0 && $data['type_cpt'] <= 2) ? 1 : 0,
            'company' => $data['company'],
            'reference' => ($data['type_cpt'] >= 0 && $data['type_cpt'] <= 2) ? "COM".Str::upper(Str::random(8)) : "ENT".Str::upper(Str::random(8)),
            'siret' => $data['siret']
        ]);
    }

    private function registerUserAccount($data, $user_id, $user_pro_id = null)
    {
        return UserAccount::create([
            'address' => isset($data['address']) ? $data['address'] : $data['address_pro'],
            'postal' => isset($data['postal']) ? $data['postal'] : $data['postal_pro'],
            'city' => isset($data['city']) ? $data['city'] : $data['city_pro'],
            'phone' => $data['phone'],
            'type_account' => $data['type_cpt'],
            'nb_salarie' => isset($data['nb_salarie']) ? $data['nb_salarie'] : null,
            'user_id' => $user_id,
            'user_pro_id' => $user_pro_id,
        ]);
    }
}
