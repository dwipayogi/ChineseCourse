<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{

    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Revenue', 
                'Rp ' . number_format(DB::table('transactions')->sum('amount'), 0, ',', '.'))
                ->color('success')
                ->description('Total pendapatan yang diperoleh')
                ->descriptionIcon('heroicon-o-currency-dollar'),

            Stat::make('Total Users', User::count())
                ->description('Total member yang bergabung')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('primary'),

            Stat::make('Total Courses', Course::count())
                ->description('Total kursus yang tersedia')
                ->descriptionIcon('heroicon-o-book-open')
                ->color('secondary'),
        ];
    }
}
