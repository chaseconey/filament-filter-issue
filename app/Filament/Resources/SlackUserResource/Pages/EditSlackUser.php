<?php

namespace App\Filament\Resources\SlackUserResource\Pages;

use App\Filament\Resources\SlackUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSlackUser extends EditRecord
{
    protected static string $resource = SlackUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
