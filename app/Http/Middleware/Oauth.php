<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

class Oauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $this->getUserFromOauthServer($request);
        if ($user) {
            $request->merge(['user' => $user]);
        }

        return $next($request);
    }

    private function getUserFromOauthServer($request): ?array
    {
        try {
            $jar = CookieJar::fromArray([
                'authToken' => $request->cookie('authToken'),
            ], 'localhost');

            $client = new Client();
            $response = $client->request('GET', \config('services.oauth.url') . '/api/user', ['cookies' => $jar]);
            $response = \json_decode($response->getBody(), true);

            return $response;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
