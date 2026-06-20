<?php

namespace App\Filament\Widgets;

use App\Models\Drink;
use Filament\Widgets\ChartWidget;

class DrinkPreferenceChart extends ChartWidget
{
    protected ?string $heading = 'Préférences des boissons';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $drinks = Drink::withCount('guests')->get();

        return [

            'datasets' => [

                [
                    'label' => 'Nombre de préférences',

                    'data' => $drinks
                        ->pluck('guests_count')
                        ->toArray(),
                ],

            ],

            'labels' => $drinks
                ->pluck('name')
                ->toArray(),

        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
