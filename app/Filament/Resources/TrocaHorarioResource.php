<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrocaHorarioResource\Pages;
use App\Filament\Resources\TrocaHorarioResource\RelationManagers;
use App\Models\TrocaHorario;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrocaHorarioResource extends Resource
{
    protected static ?string $model = TrocaHorario::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('colaborador_id')
                    ->label('Colaborador')
                    ->relationship('colaborador', 'name')
                    ->required(),
                Forms\Components\Select::make('colaborador_substituto_id')
                    ->label('Colaborador Substituto')
                    ->relationship('colaboradorSubstituto', 'name')
                    ->required(),
                Forms\Components\DateTimePicker::make('data_hora_original')
                    ->label('Data/Hora Original')
                    ->required(),
                Forms\Components\DateTimePicker::make('data_hora_nova')
                    ->label('Data/Hora Nova')
                    ->required(),
                Forms\Components\Textarea::make('motivo')
                    ->label('Motivo da Troca')
                    ->rows(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('colaborador.name')
                    ->label('Colaborador'),
                Tables\Columns\TextColumn::make('colaboradorSubstituto.name')
                    ->label('Substituto'),
                Tables\Columns\TextColumn::make('data_hora_original')
                    ->label('Data/Hora Original')
                    ->dateTime('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('data_hora_nova')
                    ->label('Data/Hora Nova')
                    ->dateTime('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('motivo')
                    ->label('Motivo')
                    ->limit(40),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i'),
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
            'index' => Pages\ListTrocaHorarios::route('/'),
            'create' => Pages\CreateTrocaHorario::route('/create'),
            'edit' => Pages\EditTrocaHorario::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Troca de Horário';
    }

    public static function getPluralLabel(): string
    {
        return 'Trocas de Horário';
    }

    public static function getNavigationLabel(): string
    {
        return 'Troca de Horário';
    }

    public static function getCreateButtonLabel(): string
    {
        return 'Nova troca de horário';
    }
}
