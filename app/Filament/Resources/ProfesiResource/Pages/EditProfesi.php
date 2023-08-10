<?php

namespace App\Filament\Resources\ProfesiResource\Pages;

use App\Filament\Resources\ProfesiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfesi extends EditRecord
{
    protected static string $resource = ProfesiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
