<?php

namespace Ronappleton\LaravelConfigSave\Facades;

use Illuminate\Support\Facades\Facade;
use Ronappleton\LaravelConfigSave\Writers\ConfigWriter;

/**
 * @method static store()
 */
class ConfigSaver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ConfigWriter::class;
    }
}
