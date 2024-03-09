<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackResource\Pages;
use App\Filament\Resources\TrackResource\Pages\CreateTrack;
use App\Filament\Resources\TrackResource\Pages\EditTrack;
use App\Filament\Resources\TrackResource\Pages\ListTracks;
use App\Filament\Resources\TrackResource\RelationManagers;
use App\Models\Track;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrackResource extends Resource
{
    protected static ?string $model = Track::class;

    protected static ?string $modelLabel = 'Lugares';

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationLabel = 'Lugares';

    protected static ?string $navigationGroup = 'Booking';

    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('color')
                    ->required()
                    ->maxLength(7),
                TimePicker::make('start_hour')
                    ->required(),
                TimePicker::make('end_hour')
                    ->required(),
                Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Lugar'),
                TextColumn::make('color')->label('Color'),
                TextColumn::make('start_hour')->label('Apertura'),
                TextColumn::make('end_hour')->label('Cierre'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListTracks::route('/'),
            'create' => CreateTrack::route('/create'),
            'edit'   => EditTrack::route('/{record}/edit'),
        ];
    }
}
