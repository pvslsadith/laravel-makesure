<?php

namespace Imanghafoori\MakeSure\Facades;

use Illuminate\Support\Facades\Facade;
use Imanghafoori\MakeSure\HttpClient;

/**
 * Class MakeSure.
 *
 * @method static HttpClient that($this)
 */
class MakeSure extends Facade
{
    public static function getFacadeAccessor()
    {
        return \Imanghafoori\MakeSure\That::class;
    }
}
