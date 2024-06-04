<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Aduan;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AduanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AduanResource\RelationManagers;

class AduanResource extends Resource
{
    protected static ?string $model = Aduan::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat';
    protected static ?string $navigationGroup = 'Menu';
    protected static ?string $navigationLabel = 'Aduan';
    protected static ?string $pluralLabel = 'Aduan ';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_pengadu')->required(),
                        TextInput::make('aduan')->required(),
                        RichEditor::make('isi_aduan')->required(),
                        FileUpload::make('bukti')
                            ->required()
                            ->directory('aduans_image')
                            ->visibility('public'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('aduan'),
                // TextColumn::make('isi_aduan'),
                ImageColumn::make('bukti')->visibility('public'),
                TextColumn::make('nama_pengadu'),
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),
                TextColumn::make('tanggapan'),
            ])
            ->filters([
                // Define any table filters here
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
            // Define relations here
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAduans::route('/'),
            'create' => Pages\CreateAduan::route('/create'),
            'edit' => Pages\EditAduan::route('/{record}/edit'),
        ];
    }
}
