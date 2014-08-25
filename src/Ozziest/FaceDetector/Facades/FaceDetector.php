<?php namespace Ozziest\FaceDetector\Facades;

use Illuminate\Support\Facades\Facade;

class FaceDetector extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
        return 'ozziest.face-detector'; 
    }

}