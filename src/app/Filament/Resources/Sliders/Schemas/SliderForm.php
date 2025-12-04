<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('subtitle')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('button_text')
                    ->default(null),
                TextInput::make('button_link')
                    ->default(null),
                FileUpload::make('photo')
                    ->disk('public')
                    ->directory('sliders')
                    ->image()
                    ->required(),
            ]);
    }
}
