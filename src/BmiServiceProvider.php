<?php
namespace anilpavuluri441\BMI;
use Illuminate\Support\ServiceProvider;
class BMIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'BMI');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make('anilpavuluri441\BMI\Controllers\BmiController');
    }
}