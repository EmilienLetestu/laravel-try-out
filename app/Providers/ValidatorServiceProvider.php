<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 24/07/2018
 * Time: 17:03
 */

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Validator::extend('word_count', function($attribute, $value, $parameters)
        {
            $words = explode(" ",$value);

            return count($words) >= $parameters[0] && count($words) <= $parameters[1];
        });
    }

    public function register()
    {

    }
}