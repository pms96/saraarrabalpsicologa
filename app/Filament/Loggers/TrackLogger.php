<?php

namespace App\Filament\Loggers;

use App\Models\Track;
use App\Filament\Resources\TrackResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class TrackLogger extends Logger
{
    public static ?string $model = Track::class;

    public static function getLabel(): string | Htmlable | null
    {
        return TrackResource::getModelLabel();
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            ->fields([
                Field::make('name')
                    ->label(__('name')),

                Field::make('color')
                    ->label(__('color')),

                Field::make('start_hour')
                    ->date()
                    ->label(__('inicio')),

                Field::make('end_hour')
                    ->date()
                    ->label(__('fin')),
                
                Field::make('status')
                    ->boolean()
                    ->label(__('status')),
            ])
            ->relationManagers([
                //
            ]);
    }
}
