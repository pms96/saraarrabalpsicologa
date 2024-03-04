<?php

namespace App\Filament\Loggers;

use App\Models\TextWidget;
use App\Filament\Resources\TextWidgetResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class TextWidgetLogger extends Logger
{
    public static ?string $model = TextWidget::class;

    public static function getLabel(): string | Htmlable | null
    {
        return TextWidgetResource::getModelLabel();
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            ->fields([
                Field::make('title')
                    ->label(__('title')),

                Field::make('key')
                    ->label(__('slug')),

                Field::make('image')                    
                    ->label(__('img')),

                Field::make('content')
                    ->label(__('body')),

                Field::make('active')
                    ->boolean()
                    ->label(__('active')),              
            ])
            ->relationManagers([
                //
            ]);
    }
}
