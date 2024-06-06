<?php

namespace App\Filament\Resources;

use App\Exports\KeuanganExport;
use Filament\Forms;
use Filament\Tables;
use App\Models\Keuangan;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KeuanganResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KeuanganResource\RelationManagers;
use App\Filament\Resources\KeuanganResource\Widgets\StatsOverview;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;

class KeuanganResource extends Resource
{
    protected static ?string $model = Keuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    protected static ?string $navigationGroup = 'Menu';
    protected static ?string $navigationLabel = 'Keuangan';
    protected static ?string $pluralLabel = 'Keuangan ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()
                    ->schema([
                        DatePicker::make('tanggal')->required(),
                        TextInput::make('keterangan')->required(),
                        TextInput::make('uang_masuk')->required()->numeric(),
                        TextInput::make('uang_keluar')->required()->numeric(),
                        // TextInput::make('saldo_kas'),
                    ])
                    ->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('tanggal')->searchable()->label('ID'),
                TextColumn::make('keterangan')->searchable()->label('Keterangan'),
                TextColumn::make('uang_masuk')->label('Uang Masuk'),
                TextColumn::make('uang_keluar')->label('Uang Keluar'),
                TextColumn::make('saldo_kas')->label('Saldo Kas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('export')
                    ->label('Export to Excel')
                    ->action(function () {
                        return Excel::download(new KeuanganExport, 'keuangan.xlsx');
                    })
                    ->color('success')
                    ->icon('heroicon-o-download'),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKeuangans::route('/'),
            'create' => Pages\CreateKeuangan::route('/create'),
            'edit' => Pages\EditKeuangan::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
