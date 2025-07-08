<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de Usuários', User::count())
                ->description('Todos os usuários registrados')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            
            Stat::make('Usuários Hoje', User::whereDate('created_at', today())->count())
                ->description('Usuários criados hoje')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('info'),
            
            Stat::make('Usuários Este Mês', User::whereMonth('created_at', now()->month)->count())
                ->description('Usuários criados este mês')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),
        ];
    }
}
