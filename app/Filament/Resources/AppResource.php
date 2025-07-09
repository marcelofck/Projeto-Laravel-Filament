<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppResource\Pages;
use App\Filament\Resources\AppResource\RelationManagers;
use App\Models\App;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppResource extends Resource
{
    protected static ?string $model = App::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    protected static ?string $navigationLabel = 'Apps';

    protected static ?string $modelLabel = 'App';

    protected static ?string $pluralModelLabel = 'Apps';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informações do App')
                    ->schema([
                        Forms\Components\TextInput::make('nome')
                            ->label('Nome')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('versao')
                            ->label('Versão')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('descricao')
                            ->label('Descrição')
                            ->rows(3),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'ativo' => 'Ativo',
                                'inativo' => 'Inativo',
                                'desenvolvimento' => 'Desenvolvimento',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('categoria')
                            ->label('Categoria')
                            ->maxLength(255),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                \Filament\Tables\Actions\Action::make('globoplay')
                    ->label('Globoplay')
                    ->color('success')
                    ->icon('heroicon-o-gift')
                    ->modalHeading('Instruções para Resgate - Vale Presente Globoplay')
                    ->modalDescription('Siga os passos abaixo para resgatar seu vale presente Globoplay')
                    ->modalContent(view('filament.modals.globoplay-instructions'))
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false)
                    ->modalCloseButton(false)
                    ->size('lg'),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome')
                    ->sortable(),
                Tables\Columns\TextColumn::make('versao')
                    ->label('Versão')
                    ->sortable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->label('Descrição')
                    ->limit(100),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'ativo',
                        'danger' => 'inativo',
                        'warning' => 'desenvolvimento',
                    ]),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('categoria')
                    ->label('Categoria')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->emptyState(view('filament.empty-state-blank'))
            ->emptyStateHeading('')
            ->emptyStateDescription('')
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
            'index' => Pages\ListApps::route('/'),
            'edit' => Pages\EditApp::route('/{record}/edit'),
        ];
    }
}
