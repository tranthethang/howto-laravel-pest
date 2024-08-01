<?php

namespace App\Providers;

use App\Services\Users;
use Dedoc\Scramble\Scramble;
use Dedoc\Scramble\Support\Generator\OpenApi;
use Dedoc\Scramble\Support\Generator\SecurityScheme;
use Dedoc\Scramble\Support\Generator\SecuritySchemes\OAuthFlow;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        Users\RegisterServiceInterface::class => Users\RegisterService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::enablePasswordGrant();

        Scramble::afterOpenApiGenerated(function (OpenApi $openApi) {
            //$openApi->secure(SecurityScheme::http('bearer', 'JWT'));

            $openApi->secure(SecurityScheme::oauth2()
                ->flow('password', function (OAuthFlow $flow) {
                    $flow
                        ->authorizationUrl(route('passport.authorizations.authorize'))
                        ->refreshUrl(route('passport.token.refresh'))
                        ->tokenUrl(route('passport.token'));
                }));
        });
    }
}
