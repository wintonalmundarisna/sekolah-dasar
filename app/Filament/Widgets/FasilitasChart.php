<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Fasilitas;

class FasilitasChart extends ChartWidget
{
    protected static ?string $heading = 'Data Fasilitas';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = Fasilitas::select('nama_fasilitas', 'jumlah')->get();
        return [
            'datasets' => [
                [
                    'label' => 'Data Fasilitas',
                    'data' => $data->pluck('jumlah'),
                ],
            ],
            'labels' => $data->pluck('nama_fasilitas'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
