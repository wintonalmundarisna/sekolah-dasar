<?php

namespace App\Filament\Widgets;

use App\Models\Fasilitas;
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
        $tendikLaki = TenagaKependidikan::where('jk', 'L')->count();
        $tendikP = TenagaKependidikan::where('jk', 'P')->count();

        $jmlGuru = Guru::count();
        $guruLaki = Guru::where('jk', 'L')->count();
        $guruP = Guru::where('jk', 'P')->count();

        $jmlSiswa = PesertaDidik::count();
        $siswaLaki = PesertaDidik::where('jk', 'L')->count();
        $siswaP = PesertaDidik::where('jk', 'P')->count();

        return [
            Stat::make('Jumlah Tenaga Pendidik', $jmlTendik)
                ->description('Laki-Laki: ' . $tendikLaki . ' | Perempuan: ' . $tendikP)
                ->icon('heroicon-o-academic-cap')
                ->chart([1, 1])
                ->color('primary'),
            Stat::make('Jumlah Guru', $jmlGuru)
                ->description('Laki-Laki: ' . $guruLaki . ' | Perempuan: ' . $guruP)
                ->icon('heroicon-o-users')
                ->chart([1, 1])
                ->color('success'),
            Stat::make('Jumlah Peserta Didik', $jmlSiswa)
                ->description('Laki-Laki: ' . $siswaLaki . ' | Perempuan: ' . $siswaP)
                ->icon('heroicon-o-user-group')
                ->chart([1, 1])
                ->color('danger'),
        ];
    }
}
