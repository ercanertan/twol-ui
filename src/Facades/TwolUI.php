<?php

namespace Ercanertan\TwolUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ercanertan\TwolUI\TwolUI
 */
class TwolUI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ercanertan\TwolUI\TwolUI::class;
    }
}
