<?php

namespace App\Filament\Widgets;

use App\Models\Guru;
use App\Models\PesertaDidik;
use App\Models\TenagaKependidikan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Enums\IconPosition;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $jmlTendik = TenagaKependidikan::count();
        $tendikLaki = TenagaKependidikan::where('jk', 'Laki-Laki')->count();
        $tendikPerempuan = TenagaKependidikan::where('jk', 'Perempuan')->count();

        $jmlGuru = Guru::count();
        $guruLaki = Guru::where('jk', 'Laki-Laki')->count();
        $guruPerempuan = Guru::where('jk', 'Perempuan')->count();

        $jmlSiswa = PesertaDidik::count();
        $laki = PesertaDidik::where('jk', 'Laki-Laki')->count();
        $perempuan = PesertaDidik::where('jk', 'Perempuan')->count();

        return [
            Stat::make('Jumlah Tenaga Pendidik', $jmlTendik)
                ->description('Laki-laki: ' . $tendikLaki . ' | Perempuan: ' . $tendikPerempuan)
                ->icon('heroicon-o-academic-cap')
                ->chart([1, 1])
                ->color('primary'),
            Stat::make('Jumlah Guru', $jmlGuru)
                ->description('Laki-laki: ' . $guruLaki . ' | Perempuan: ' . $guruPerempuan)
                ->icon('heroicon-o-users')
                ->chart([1, 1])
                ->color('success'),
            Stat::make('Jumlah Peserta Didik', $jmlSiswa)
                ->description('Laki-laki: ' . $laki . ' | Perempuan: ' . $perempuan)
                ->icon('heroicon-o-user-group')
                ->chart([1, 1])
                ->color('danger'),
            
        ];
    }
}
