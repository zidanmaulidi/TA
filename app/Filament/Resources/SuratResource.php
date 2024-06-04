<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratResource\Pages;
use App\Filament\Resources\SuratResource\RelationManagers;
use App\Models\Surat;
use App\Models\SuratModel;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratResource extends Resource
{
    protected static ?string $model = SuratModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Menu';
    protected static ?string $title = 'Surat';
    protected static ?string $navigationLabel = 'Surat';
    protected static ?string $pluralLabel = 'Surat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_pengaju')->required(),
                        TextInput::make('NIK')->required(),
                        TextInput::make('tempat_lahir')->required(),
                        DatePicker::make('tgl_lahir')->required(),
                        TextInput::make('pekerjaan')->required(),
                        TextInput::make('status')->required(),
                        TextInput::make('alamat')->required(),
                        TextInput::make('keperluan')->required(),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('NIK'),
                TextColumn::make('tempat_lahir'),
                TextColumn::make('tgl_lahir'),
                TextColumn::make('pekerjaan'),
                TextColumn::make('status'),
                TextColumn::make('alamat'),
                TextColumn::make('keperluan')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
        
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
            'index' => Pages\ListSurats::route('/'),
            'create' => Pages\CreateSurat::route('/create'),
            'edit' => Pages\EditSurat::route('/{record}/edit'),

        ];
    }
}
