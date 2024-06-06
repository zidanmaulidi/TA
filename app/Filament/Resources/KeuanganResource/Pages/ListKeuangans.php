<?php

namespace App\Filament\Resources\KeuanganResource\Pages;

use App\Exports\KeuanganExport;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\KeuanganResource;
use App\Filament\Resources\KeuanganResource\Widgets\StatsOverview;
use Maatwebsite\Excel\Facades\Excel;

class ListKeuangans extends ListRecords
{
    protected static string $resource = KeuanganResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('export')
                ->label('Export to Excel')
                ->action(function () {
                    return Excel::download(new KeuanganExport, 'keuangan.csv');
                })
                ->color('success')
                ->icon('heroicon-o-download'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
