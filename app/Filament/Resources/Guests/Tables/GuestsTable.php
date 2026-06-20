<?php

namespace App\Filament\Resources\Guests\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class GuestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('phone')
                    ->placeholder('---')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Statut')
                    ->formatStateUsing(fn($record) => $record->status == 'pending' ? 'En attente' : $record->status)
                    ->searchable(),
                TextColumn::make('responded_at')
                    ->label('Réspondu le')
                     ->formatStateUsing(fn ($state) => $state
                        ? \Carbon\Carbon::parse($state)->format('d/m/Y H:i')
                        : '---'
                    )
                    ->placeholder('---')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Ajouté le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('invitation_pdf')
                    ->label('Invitation')
                    ->placeholder('---')
                    ->url(fn($record) => Storage::url($record->invitation_pdf))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn() => 'Voir PDF')
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->label('Modifié le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Modifier')
                    ->color('info'),
                Action::make('share')
                    ->label('Partager')
                    ->icon('heroicon-o-share')
                    ->url(
                            fn($record) =>
                            'https://wa.me/' .
                            $record->phone .
                            '?text=' .
                            urlencode(
                            "Bonjour {$record->name}, Vous êtes invité à notre mariage. Consultez votre invitation ici : " . route('invitation.show', $record)
                        )

                    )
                    ->openUrlInNewTab()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
