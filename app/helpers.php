<?php
if (!function_exists('currentRouteActiveFront')) {
    function currentRouteActiveFront(...$routes)
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() === $route) return 'active';
        }
    }
}
