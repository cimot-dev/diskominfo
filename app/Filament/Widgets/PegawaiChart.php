<?php

namespace App\Filament\Widgets;

use App\Models\Pegawai;
use Filament\Widgets\ChartWidget;

class PegawaiChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Pegawai Tiap Tahun';

    protected function getData(): array
    {
        // Mengambil jumlah pegawai berdasarkan tahun
        $pegawaiData = Pegawai::selectRaw('YEAR(created_at) as year, COUNT(*) as total')
            ->groupBy('year')
            ->orderBy('year')
            ->get()
            ->pluck('total', 'year');

        // Mengambil daftar tahun
        $years = $pegawaiData->keys()->toArray();

        // Menyusun data jumlah pegawai baru per tahun
        $data = $pegawaiData->values()->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Pegawai Baru',
                    'data' => $data,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)', // Warna background bar
                    'borderColor' => 'rgba(75, 192, 192, 1)',      // Warna border bar
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $years, // Menampilkan tahun sebagai label
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Menggunakan bar chart
    }
}
