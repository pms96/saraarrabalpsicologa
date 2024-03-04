<?php

namespace App\Filament\Loggers;

use App\Models\Reservation;
use App\Filament\Resources\ReservationResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class ReservationLogger extends Logger
{
    public static ?string $model = Reservation::class;

    public static function getLabel(): string | Htmlable | null
    {
        return ReservationResource::getModelLabel();
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            ->fields([
            
                Field::make('user.name')
                    ->hasOne('user')
                    ->label(__('client'))
                    ->badge(),

                Field::make('track.name')
                    ->hasOne('track')
                    ->label(__('lugar'))
                    ->badge(),

                Field::make('start_time')
                    ->label(__('start')),

                Field::make('end_time')
                    ->label(__('end')),
            
            ])
            ->relationManagers([
                //
            ]);
    }
}
