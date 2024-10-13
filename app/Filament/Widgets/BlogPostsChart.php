<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart Postingan Perbulan';

    protected function getData(): array
    {
        // Ambil data jumlah postingan yang dibuat setiap bulan
        $postsPerMonth = Post::select(
            DB::raw('COUNT(*) as count'), // Hitung jumlah postingan
            DB::raw('MONTH(created_at) as month') // Grup berdasarkan bulan
        )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Buat array data jumlah postingan dan label bulan
        $data = [];
        $labels = [];

        // Siapkan data dan label untuk chart
        foreach ($postsPerMonth as $post) {
            $data[] = $post->count;
            $labels[] = date('F', mktime(0, 0, 0, $post->month, 1)); // Mengonversi angka bulan menjadi nama bulan
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Postingan',
                    'data' => $data, // Data jumlah postingan
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels, // Nama bulan
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Tipe chart, bisa diganti dengan 'line' atau yang lain
    }
}
