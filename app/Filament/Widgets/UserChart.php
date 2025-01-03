<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;
use App\Models\Instructor;

class UserChart extends ChartWidget
{
    protected static ?string $heading = 'Users';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'labels' => ['Students', 'Instructors'],
            'datasets' => [
                [
                    'label' => 'Users',
                    'data' => [User::count(), Instructor::count()],
                    'backgroundColor' => ['rgb(255, 99, 132)', 'rgb(54, 162, 235)'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
