<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Course;

class CourseChart extends ChartWidget
{
    protected static ?string $heading = 'Courses';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'labels' => ['Draft', 'Published', 'Featured'],
            'datasets' => [
                [
                    'label' => 'Users',
                    'data' => [Course::where('status', 'draft')->count(), Course::where('status', 'published')->count(), Course::where('status', 'featured')->count()],

                    'backgroundColor' => ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
