<?php namespace Ozziest\FaceDetector;

use Illuminate\Support\ServiceProvider;

class FaceDetectorServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['ozziest.face-detector'] = $this->app->share(function($app)
        {
            return new FaceDetector();              
        });     
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
