<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('time')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('events')
                    ->image()
                    ->required(),
            ]);
    }
}
