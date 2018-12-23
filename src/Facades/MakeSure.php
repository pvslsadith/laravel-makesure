<?php

namespace Imanghafoori\MakeSure\Facades;

use Imanghafoori\MakeSure\HttpClient;
use Illuminate\Support\Facades\Facade;

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
