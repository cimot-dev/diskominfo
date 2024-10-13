<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use App\Models\Pegawai;
use App\Filament\Resources\PostResource;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\PegawaiResource;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Pengguna yang Login', User::count())
                ->color('primary')
                ->icon('heroicon-o-user')
                ->chart([2, 3, 5, 6, 9, 7, 5]) // Elemen interaktif berupa chart mini
                ->extraAttributes([
                    'class' => 'shadow-lg border-l-4 border-indigo-500 transform transition-all duration-500 ease-in-out hover:scale-105 hover:-translate-y-1',
                ])
                ->url(UserResource::getUrl()),

            Stat::make('Jumlah Pegawai', Pegawai::count())
                ->color('success')
                ->icon('heroicon-o-briefcase')
                ->chart([1, 4, 6, 8, 7, 5, 4]) // Elemen interaktif berupa chart mini
                ->extraAttributes([
                    'class' => 'shadow-lg border-l-4 border-green-500 transform transition-all duration-500 ease-in-out hover:scale-105 hover:-translate-y-1',
                ])
                ->url(PegawaiResource::getUrl()),


            Stat::make('Jumlah Postingan', Post::count())
                ->description('Total Views')
                ->descriptionIcon('heroicon-o-eye')
                ->chart([5, 10, 6, 7, 8, 10, 12]) // Elemen interaktif berupa chart mini
                ->color('danger')
                ->extraAttributes([
                    'class' => 'shadow-lg border-l-4 border-red-500 transform transition-all duration-500 ease-in-out hover:scale-105 hover:-translate-y-1',
                ])
                ->url(PostResource::getUrl()),
        ];
    }
}
