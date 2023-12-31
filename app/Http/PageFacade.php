<?php

namespace App\Http;

use Illuminate\Support\Facades\Facade;

class PageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PageTemplate::class;
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param  string  $method
     * @param  array  $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic($method, $args)
    {
        return parent::__callStatic('get'.ucfirst($method), $args);
    }
}
