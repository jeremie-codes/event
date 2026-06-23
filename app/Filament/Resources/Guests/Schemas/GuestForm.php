<?php

namespace App\Filament\Resources\Guests\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GuestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Select::make('drinks')
                    ->label('Boissons (Laiisez vide pour que l\'invité choisisse lui-même)')
                    ->relationship('drinks', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
               Select::make('table_id')
                    ->relationship('table', 'name')
                    ->placeholder('choisir ou ajouter une nouvelle table')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->label('Nom de la nouvelle table')
                            ->required(),
                    ]),
                Select::make('status')
                    ->options([
                        'pending' => 'En attente',
                        'present' => 'Présent',
                        'absent' => 'Absent',
                    ])
                    ->required()
                    ->default('pending'),
                FileUpload::make('invitation_pdf')
                    ->label('Invitation PDF')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('invitations')
                    ->downloadable()
                    ->openable()
                    ->columnSpanFull(),
                Textarea::make('comment')
                    ->columnSpanFull(),
                //DateTimePicker::make('responded_at'),
            ]);
    }
}
