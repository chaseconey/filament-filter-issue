<?php

namespace App\Filament\Resources\SlackUserResource\Pages;

use App\Filament\Resources\SlackUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSlackUser extends CreateRecord
{
    protected static string $resource = SlackUserResource::class;
}
