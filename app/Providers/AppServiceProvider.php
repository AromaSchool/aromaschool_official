<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
            $client = new Client();

            $response = $client->post($verifyUrl, [
                'form_params' => [
                    'secret' => \config('services.recaptcha.key'),
                    'response' => $value,
                ]
            ]);
            $body = \json_decode($response->getBody(), true);

            return $body['success'];
        });
    }
}
