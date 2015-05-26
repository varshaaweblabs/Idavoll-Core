<?php

if (! function_exists('on_route')) {
    function on_route($route)
    {
        return Route::current()->getName() == $route;
    }
}

if (! function_exists('locale')) {
    function locale($locale = null)
    {
        if (is_null($locale)) {
            return LaravelLocalization::getCurrentLocale();
        }

        return LaravelLocalization::setLocale($locale);
    }
}
