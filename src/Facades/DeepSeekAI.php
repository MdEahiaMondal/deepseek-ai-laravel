<?php

namespace eahiya\DeepSeekAI\Facades;

use Illuminate\Support\Facades\Facade;

class DeepSeekAI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'deepseek';
    }
}