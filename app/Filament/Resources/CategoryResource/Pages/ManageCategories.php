<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Noxo\FilamentActivityLog\Extensions\LogCreateRecord;
use Noxo\FilamentActivityLog\Extensions\LogEditRecord;

class ManageCategories extends ManageRecords
{
    use LogCreateRecord;
    use LogEditRecord;
    
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
