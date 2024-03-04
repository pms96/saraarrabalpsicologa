<?php

namespace App\Filament\Loggers;

use App\Models\Post;
use App\Filament\Resources\PostResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;

class PostLogger extends Logger
{
    public static ?string $model = Post::class;

    public static function getLabel(): string | Htmlable | null
    {
        return PostResource::getModelLabel();
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            ->fields([
                Field::make('title')
                    ->label(__('title')),

                Field::make('slug')
                    ->label(__('slug')),

                Field::make('thumbnail')                    
                    ->label(__('img')),

                Field::make('body')
                    ->label(__('body')),

                Field::make('active')
                    ->boolean()
                    ->label(__('active')),

                Field::make('published_at')
                    ->date()
                    ->label(__('publish')),

                Field::make('user.name')
                    ->hasOne('user')
                    ->label(__('user'))
                    ->badge(),
            ])
            ->relationManagers([
                //
            ]);
    }
}
