<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Course;

class TrendChart extends ChartWidget

{
    protected static ?string $heading = 'Top Courses';
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $courses = Course::query()
            ->orderByDesc('total_enrolled')
            ->take(5)
            ->get(['title', 'total_enrolled']);
            
        return [
            'datasets' => [
                [
                    'label' => 'Total Enrolled',
                    'data' => $courses->pluck('total_enrolled')->toArray(),
                ],
            ],
            'labels' => $courses->pluck('title')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
