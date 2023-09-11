<?php

namespace App\Filament\Resources\SlackUserResource\Pages;

use App\Filament\Resources\SlackUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSlackUser extends ViewRecord
{
    protected static string $resource = SlackUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
