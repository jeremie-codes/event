<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('groom_name')
                    ->label('Nom du mari')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('bride_name')
                    ->label('Nom de la femme')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('hall_name')
                    ->label('Nom de la salle')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('hall_address')
                    ->label('Adresse de la salle')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('marriage_date')
                    ->label('Date de mariage')
                    ->placeholder('---')
                    ->date()
                    ->sortable(),
                TextColumn::make('marriage_time')
                    ->label('Heure de mariage')
                    ->placeholder('---')
                    ->time()
                    ->sortable(),
                TextColumn::make('banner')
                    ->label('Bannière')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->placeholder('---')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Modifié le')
                    ->placeholder('---')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
