<?php

namespace App\Filament\Widgets;

use App\Models\Torrent;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestTorrents extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getTableHeading(): string | Closure | null
    {
        return __('dashboard.latest_torrent.page_title');
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getTableQuery(): Builder
    {
        return Torrent::query()->orderBy('id', 'desc')->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')->limit(40),
            Tables\Columns\TextColumn::make('user.username'),
            Tables\Columns\TextColumn::make('size')->formatStateUsing(fn ($state) => mksize($state)),
            Tables\Columns\TextColumn::make('added')->dateTime(),
        ];
    }
}