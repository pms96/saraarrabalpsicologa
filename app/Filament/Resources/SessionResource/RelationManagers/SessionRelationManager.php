<?php

namespace App\Filament\Resources\SessionResource\RelationManagers;

use App\Models\Session;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Squire\Models\Country;

class SessionRelationManager extends RelationManager
{
    protected static string $relationship = 'session';

    // protected static ?string $inverseRelationship = 'session';

    // protected static ?string $recordTitleAttribute = '';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),

                Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('edit')
                    ->url(fn (Session $record): string => route('filament.admin.resources.sessions.edit', $record))
            ]);
    }
}