<?php

namespace App\Filament\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Noxo\FilamentActivityLog\Pages\ListActivities;

class Activities extends ListActivities
{
    use HasPageShield;
    
    protected bool $isCollapsible = true;

    protected bool $isCollapsed = false;

    protected static ?string $navigationGroup = 'Herramientas';

    public function getTitle(): string
    {
        return __('filament-activity-log::activities.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-activity-log::activities.title');
    }

}
