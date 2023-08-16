<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Posts',  Post::count()),
            Stat::make('Posts Created Today', Post::whereDate('created_at', today())->count()),
            Stat::make('Posts Created This Month', Post::whereMonth('created_at', now()->month)->count()),
            Stat::make('Users', User::count()),
            Stat::make('Users Registered Today', User::whereDate('created_at', today())->count()),
            Stat::make('Users Registered This Month', User::whereMonth('created_at', now()->month)->count()),
        ];
    }
}
