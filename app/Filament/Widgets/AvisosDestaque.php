<?php

namespace App\Filament\Widgets;

use App\Models\Aviso;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class AvisosDestaque extends BaseWidget
{
    protected static ?string $heading = 'Avisos em Destaque';

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Aviso::query()
                    ->where('ativo', true)
                    ->where('prioridade', 'critica')
                    ->orWhere('prioridade', 'alta')
                    ->orderBy('prioridade', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->label('Título')
                    ->weight('bold')
                    ->color(fn (Aviso $record): string => 
                        $record->prioridade === 'critica' ? 'danger' : 'warning'
                    )
                    ->searchable(),
                Tables\Columns\TextColumn::make('conteudo')
                    ->label('Conteúdo')
                    ->limit(150)
                    ->html()
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('prioridade')
                    ->label('Prioridade')
                    ->colors([
                        'danger' => 'critica',
                        'warning' => 'alta',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('ver')
                    ->label('Ver Detalhes')
                    ->url(fn (Aviso $record): string => route('filament.admin.resources.avisos.edit', $record))
                    ->icon('heroicon-m-eye')
                    ->color('primary'),
            ])
            ->paginated(false);
    }
}
