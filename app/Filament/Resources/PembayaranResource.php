<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembayaranResource\Pages;
use App\Filament\Resources\PembayaranResource\RelationManagers;
use App\Models\Pembayaran;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pembayaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_pengguna')
                    ->required(),
                Forms\Components\TextInput::make('info_pembayaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tgl_aktivasi')
                    ->required(),
                Forms\Components\TextInput::make('tgl_kadaluarsa')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pembayaran'),
                Tables\Columns\TextColumn::make('id_pengguna'),
                Tables\Columns\TextColumn::make('info_pembayaran'),
                Tables\Columns\TextColumn::make('tgl_aktivasi')
                    ->date(),
                Tables\Columns\TextColumn::make('tgl_kadaluarsa'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }   
    
    public static function canViewAny(): bool
    {
        return ! auth()->user()->is_admin;
    }
}
