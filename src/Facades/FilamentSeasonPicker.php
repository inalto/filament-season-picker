<?php

namespace Inalto\FilamentSeasonPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inalto\FilamentSeasonPicker\FilamentSeasonPicker
 */
class FilamentSeasonPicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inalto\FilamentSeasonPicker\FilamentSeasonPicker::class;
    }
}
