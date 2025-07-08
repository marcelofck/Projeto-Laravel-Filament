<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoteadorResource\Pages;
use App\Filament\Resources\RoteadorResource\RelationManagers;
use App\Models\Roteador;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoteadorResource extends Resource
{
    protected static ?string $model = Roteador::class;

    protected static ?string $navigationIcon = 'heroicon-o-wifi';

    protected static ?string $navigationLabel = 'Roteadores';

    protected static ?string $modelLabel = 'Roteador';

    protected static ?string $pluralModelLabel = 'Roteadores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informações do Roteador')
                    ->schema([
                        Forms\Components\TextInput::make('nome')
                            ->label('Nome')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ip_address')
                            ->label('Endereço IP')
                            ->required()
                            ->ipv4()
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('modelo')
                            ->label('Modelo')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('fabricante')
                            ->label('Fabricante')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'ativo' => 'Ativo',
                                'inativo' => 'Inativo',
                                'manutencao' => 'Manutenção',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('localizacao')
                            ->label('Localização')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('descricao')
                            ->label('Descrição')
                            ->rows(3),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ip_address')
                    ->label('IP')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('modelo')
                    ->label('Modelo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fabricante')
                    ->label('Fabricante')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'ativo',
                        'danger' => 'inativo',
                        'warning' => 'manutencao',
                    ]),
                Tables\Columns\TextColumn::make('localizacao')
                    ->label('Localização')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de Criação')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'ativo' => 'Ativo',
                        'inativo' => 'Inativo',
                        'manutencao' => 'Manutenção',
                    ]),
                Tables\Filters\Filter::make('fabricante')
                    ->form([
                        Forms\Components\TextInput::make('fabricante')
                            ->label('Fabricante'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['fabricante'],
                                fn (Builder $query, $fabricante): Builder => $query->where('fabricante', 'like', "%{$fabricante}%"),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListRoteadors::route('/'),
            'create' => Pages\CreateRoteador::route('/create'),
            'edit' => Pages\EditRoteador::route('/{record}/edit'),
        ];
    }
}
