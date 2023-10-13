<?php

namespace SparkLaravel\Toolbox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SparkLaravel\Toolbox\Toolbox
 */
class Toolbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SparkLaravel\Toolbox\Toolbox::class;
    }
}
