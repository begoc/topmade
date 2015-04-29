<?php namespace Topmade\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Topmade\Contracts\Repositories\Contact',
            'Topmade\Repositories\Contact',
            true
        );

        $this->app->bind(
            'Topmade\Contracts\Repositories\Section',
            'Topmade\Repositories\Section',
            true
        );

        $this->app->bind(
            'Topmade\Contracts\Repositories\Article',
            'Topmade\Repositories\Article',
            true
        );

        $this->app->bind(
            'Topmade\Contracts\Repositories\User',
            'Topmade\Repositories\User',
            true
        );
    }
}
