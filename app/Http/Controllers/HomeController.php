<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use Artesaos\SEOTools\Facades\SEOTools;
use Github\Api\Repo;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle(config('app.name'));
        SEOTools::setDescription('PLATEFORME EUROPEENNE DE REDUCTIONS ET AVANTAGES SOCIAUX');
        SEOTools::opengraph()->setUrl(url()->current());
        return view('front.index');
    }
}
