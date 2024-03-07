<?php

namespace App\Filament\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class Calendar extends Page
{
    use HasPageShield;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static string $view = 'filament.resources.calendar.pages.calendar';

    protected static ?string $navigationLabel = 'Calendario';

    protected static ?string $navigationGroup = 'Booking';

    protected static ?int $navigationSort = 1;
}