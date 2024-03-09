<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\SessionResource\RelationManagers\SessionRelationManager;
use App\Filament\Resources\Shop\CustomerResource\RelationManagers;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Patient;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Consulta';

    protected static ?string $navigationLabel = 'Pacientes';

    protected static ?string $modelLabel = 'Pacientes';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make()
                ->schema([
                    Select::make('user_id')
                        ->label('Usuario')
                        ->searchable()
                        ->options(User::all()->pluck('name', 'id')),
                    TextInput::make('name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('first_name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('last_name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('email')
                        ->label('Email address')
                        ->required()
                        ->email()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),
                    TextInput::make('phone')
                        ->maxLength(255),
                    TextInput::make('personal_id')
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),
                    Select::make('gender')
                        ->label('Género')
                        ->searchable()
                        ->required()
                        ->options(Gender::all()->pluck('name', 'id')),
                    DatePicker::make('birth_date')
                        ->maxDate('today'),
                    TextInput::make('city')
                        ->maxLength(255)
                        ->columnSpan(2),
                    TextInput::make('postal_code')
                        ->maxLength(255),
                    Select::make('country')
                        ->label('País')
                        ->searchable()
                        ->required()
                        ->options(Country::all()->pluck('name', 'id')),
                    TextInput::make('address')
                        ->required()
                        ->columnSpan('full'),  
                    RichEditor::make('notes')
                        ->required()
                        ->columnSpan('full'),

                ])->columns(3)
                ->columnSpan(['lg' => fn (?Patient $record) => $record === null ? 12 : 8]),

            Section::make()
                ->schema([
                    Placeholder::make('first_visit')
                        ->label('1º Visita')
                        ->content(fn (Patient $record): ?string => $record->created_at?->diffForHumans()),

                    Placeholder::make('last_visit')
                        ->label('Ult. Visita')
                        ->content(fn (Patient $record): ?string => $record->updated_at?->diffForHumans()),

                    Placeholder::make('next_appointment')
                        ->label('Prox. Visita')
                        ->content(fn (Patient $record): ?string => $record->updated_at?->diffForHumans()),
                ])
                ->hidden(fn (?Patient $record) => $record === null)
                ->columnSpan(4),
        ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('first_name')
                    ->label('1º Apellido')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('2º Apellido') 
                    ->searchable()
                    ->sortable(),
                TextColumn::make('personal_id')
                    ->label('Dni')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Correo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_visit')
                    ->label('Ult. V')
                    ->searchable()
                    ->sortable(),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\CreateAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            SessionRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
