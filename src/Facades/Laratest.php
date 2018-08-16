<?php

namespace Lara\Laratest\Facades;

use Illuminate\Support\Facades\Facade;

class Laratest extends Facade

{

    protected static function getFacadeAccessor()

    {

        return 'laratest';
    }

}