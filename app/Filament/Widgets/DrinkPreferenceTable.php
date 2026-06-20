<?php

namespace App\Filament\Widgets;

use App\Models\Drink;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class DrinkPreferenceTable extends TableWidget
{

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Drink::query()->withCount('guests')
            )
            ->columns([

                TextColumn::make('name')
                    ->label('Boisson'),

                TextColumn::make('guests_count')
                    ->label('Préférences')
                    ->badge(),

            ]);
    }
}
