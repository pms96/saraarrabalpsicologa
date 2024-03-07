<?php

namespace App\Filament\Loggers;

use App\Models\User;
use App\Filament\Resources\UserResource;
use Illuminate\Contracts\Support\Htmlable;
use Noxo\FilamentActivityLog\Loggers\Logger;
use Noxo\FilamentActivityLog\ResourceLogger\Field;
use Noxo\FilamentActivityLog\ResourceLogger\RelationManager;
use Noxo\FilamentActivityLog\ResourceLogger\ResourceLogger;
use Spatie\Activitylog\Models\Activity;

class UserLogger extends Logger
{
    public static ?string $model = User::class;

    public static function getLabel(): string | Htmlable | null
    {
        return UserResource::getModelLabel();
    }

    public function getSubjectRoute(Activity $activity): ?string
    {
        return UserResource::getUrl('edit', ['record' => $activity->subject_id]);
    }

    public function getRelationManagerRoute(Activity $activity): ?string
    {
        return $this->getSubjectRoute($activity).'?activeRelationManager=0';
    }

    public static function resource(ResourceLogger $logger): ResourceLogger
    {
        return $logger
            // Resource Fields
            ->fields([
                Field::make('name')
                    ->label(__('name')),

                Field::make('email')
                    ->label(__('email')),

                Field::make('theme')
                    ->label(__('tema')),

                Field::make('theme_color')
                    ->label(__('color')),
                
                Field::make('roles.name')
                    ->hasMany('roles')
                    ->label(__('Roles'))
                    ->badge(),
            ]);
    }
}
