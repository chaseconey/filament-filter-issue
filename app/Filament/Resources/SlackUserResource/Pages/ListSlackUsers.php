<?php

namespace App\Filament\Resources\SlackUserResource\Pages;

use App\Filament\Resources\SlackUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSlackUsers extends ListRecords
{
    protected static string $resource = SlackUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
