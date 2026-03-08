<?php
namespace Inalto\FilamentSeasonPicker\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;
use Inalto\FilamentSeasonPicker\Enums\SeasonPickerTheme;

class SeasonPicker extends Field
{

    use HasPlaceholder,
    HasAffixes,
    HasExtraInputAttributes;

    const PACKAGE_NAME = 'inalto/filament-season-picker';

    protected string $view = 'filament-season-picker::forms.components.season-picker';

    protected array $config = [];



    public function getConfig(): array
    {
        $config = [];

        return $config;
    }


    public function getThemeAsset(): string
    {

        return asset('css/'.static::PACKAGE_NAME.'/seasonpicker-'.$this->getTheme().'-theme.css');
    }

}
