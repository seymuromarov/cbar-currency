<?php

namespace Seymur\Currency\Facades;

Use Illuminate\Support\Facades\Facade;

class Currency extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'seymur-currency';
    }


}