<?php

namespace App\Filament\User\Resources\OrderResource\Pages;

use App\Filament\User\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

use Filament\Tables\Actions\Action as TableAction;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;
}
