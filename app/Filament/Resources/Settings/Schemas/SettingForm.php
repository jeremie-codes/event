<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('groom_name')
                    ->label('Nom du mari'),
                TextInput::make('bride_name')
                    ->label('Nom de la femme'),
                TextInput::make('hall_name')
                    ->label('Nom de la salle'),
                TextInput::make('hall_address')
                    ->label('Adresse de la salle'),
                DatePicker::make('marriage_date')
                    ->label('Date de mariage'),
                TimePicker::make('marriage_time')
                    ->label('Heure de mariage'),
                Textarea::make('maps_url')
                    ->label('URL de la carte')
                    ->columnSpanFull(),
                FileUpload::make('banner')
                    ->label('Image de bannière')
                    //->placeholder('Glissez un fichier ou cliquez ici')
                    ->acceptedFileTypes(['application/pdf', 'image/*'])
                    ->directory('banners')
                    ->downloadable()
                    ->openable()
                    ->columnSpanFull(),
            ]);
    }
}
