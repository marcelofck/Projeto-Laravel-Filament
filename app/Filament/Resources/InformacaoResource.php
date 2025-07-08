<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformacaoResource\Pages;
use App\Filament\Resources\InformacaoResource\RelationManagers;
use App\Models\Informacao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformacaoResource extends Resource
{
    protected static ?string $model = Informacao::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListInformacaos::route('/'),
            'create' => Pages\CreateInformacao::route('/create'),
            'edit' => Pages\EditInformacao::route('/{record}/edit'),
        ];
    }
}
