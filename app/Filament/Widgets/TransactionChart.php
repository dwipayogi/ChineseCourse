<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Transaction;

class TransactionChart extends ChartWidget
{
    protected static ?string $heading = 'Revenue';
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;


    protected function getData(): array
    {
        return [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', "August", "September", "October", "November", "December"],
            'datasets' => [
                [
                    'label' => 'Revenue',
                    'data' => [
                        Transaction::whereMonth('created_at', 1)->sum('amount'),
                        Transaction::whereMonth('created_at', 2)->sum('amount'),
                        Transaction::whereMonth('created_at', 3)->sum('amount'),
                        Transaction::whereMonth('created_at', 4)->sum('amount'),
                        Transaction::whereMonth('created_at', 5)->sum('amount'),
                        Transaction::whereMonth('created_at', 6)->sum('amount'),
                        Transaction::whereMonth('created_at', 7)->sum('amount'),
                        Transaction::whereMonth('created_at', 8)->sum('amount'),
                        Transaction::whereMonth('created_at', 9)->sum('amount'),
                        Transaction::whereMonth('created_at', 10)->sum('amount'),
                        Transaction::whereMonth('created_at', 11)->sum('amount'),
                        Transaction::whereMonth('created_at', 12)->sum('amount'),
                    ],
                    'fill' => true,
                    'borderColor' => 'rgb(75, 192, 192)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.1)',
                    'lineTension' => 0.1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
