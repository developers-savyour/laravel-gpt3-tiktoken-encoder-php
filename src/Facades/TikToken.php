<?php

namespace DevelopersSavyour\TikToken\Facades;

use Illuminate\Support\Facades\Facade;

class TikToken extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tiktoken';
    }
}
