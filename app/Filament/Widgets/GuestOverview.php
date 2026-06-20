<?php

namespace App\Filament\Widgets;

use App\Models\Guest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GuestOverview extends StatsOverviewWidget
{

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [

            Stat::make(
                'Total invités',
                Guest::count()
            )
                ->description('Nombre total des invités')
                ->icon('heroicon-o-users'),

            Stat::make(
                'Présents',
                Guest::where('status', 'present')->count()
            )
                ->description('Invités ayant confirmé')
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make(
                'Absents',
                Guest::where('status', 'absent')->count()
            )
                ->description('Invités indisponibles')
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make(
                'En attente',
                Guest::where('status', 'pending')->count()
            )
                ->description('Pas encore répondu')
                ->icon('heroicon-o-clock')
                ->color('warning'),

        ];
    }
}
