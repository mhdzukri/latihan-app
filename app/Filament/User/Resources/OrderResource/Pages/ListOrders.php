<?php

namespace App\Filament\User\Resources\OrderResource\Pages;

use App\Filament\User\Resources\OrderResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->where('customer_id', auth()->id());
    }
}
