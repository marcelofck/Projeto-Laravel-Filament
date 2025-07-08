<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvisoResource\Pages;
use App\Filament\Resources\AvisoResource\RelationManagers;
use App\Models\Aviso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvisoResource extends Resource
{
    protected static ?string $model = Aviso::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationLabel = 'Avisos';

    protected static ?string $modelLabel = 'Aviso';

    protected static ?string $pluralModelLabel = 'Avisos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informações do Aviso')
                    ->schema([
                        Forms\Components\TextInput::make('titulo')
                            ->label('Título')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('conteudo')
                            ->label('Conteúdo')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Select::make('tipo')
                            ->label('Tipo')
                            ->options([
                                'info' => 'Informação',
                                'aviso' => 'Aviso',
                                'erro' => 'Erro',
                                'sucesso' => 'Sucesso',
                            ])
                            ->required(),
                        Forms\Components\Select::make('prioridade')
                            ->label('Prioridade')
                            ->options([
                                'baixa' => 'Baixa',
                                'media' => 'Média',
                                'alta' => 'Alta',
                                'critica' => 'Crítica',
                            ])
                            ->required(),
                        Forms\Components\Toggle::make('ativo')
                            ->label('Ativo')
                            ->default(true),
                        Forms\Components\DateTimePicker::make('data_inicio')
                            ->label('Data de Início')
                            ->nullable(),
                        Forms\Components\DateTimePicker::make('data_fim')
                            ->label('Data de Fim')
                            ->nullable(),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->label('Título')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->color(fn (Aviso $record): string => 
                        $record->prioridade === 'critica' ? 'danger' : 
                        ($record->prioridade === 'alta' ? 'warning' : 'default')
                    ),
                Tables\Columns\TextColumn::make('conteudo')
                    ->label('Conteúdo')
                    ->limit(100)
                    ->html()
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('tipo')
                    ->label('Tipo')
                    ->colors([
                        'info' => 'info',
                        'warning' => 'aviso',
                        'danger' => 'erro',
                        'success' => 'sucesso',
                    ]),
                Tables\Columns\BadgeColumn::make('prioridade')
                    ->label('Prioridade')
                    ->colors([
                        'success' => 'baixa',
                        'info' => 'media',
                        'warning' => 'alta',
                        'danger' => 'critica',
                    ]),
                Tables\Columns\IconColumn::make('ativo')
                    ->label('Ativo')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                Tables\Columns\TextColumn::make('data_inicio')
                    ->label('Início')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('data_fim')
                    ->label('Fim')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tipo')
                    ->label('Tipo')
                    ->options([
                        'info' => 'Informação',
                        'aviso' => 'Aviso',
                        'erro' => 'Erro',
                        'sucesso' => 'Sucesso',
                    ]),
                Tables\Filters\SelectFilter::make('prioridade')
                    ->label('Prioridade')
                    ->options([
                        'baixa' => 'Baixa',
                        'media' => 'Média',
                        'alta' => 'Alta',
                        'critica' => 'Crítica',
                    ]),
                Tables\Filters\TernaryFilter::make('ativo')
                    ->label('Ativo'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListAvisos::route('/'),
            'create' => Pages\CreateAviso::route('/create'),
            'edit' => Pages\EditAviso::route('/{record}/edit'),
        ];
    }
}
