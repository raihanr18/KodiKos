<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use App\Models\Mentor;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Manage Info';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id')
                    ->label('Mentor')
                    ->required()
                    ->hiddenOn('edit')
                    ->options(User::all()->pluck('email', 'id')),
                Forms\Components\Select::make('hari')
                    ->options([
                        'senin' => 'Senin',
                        'selasa' => 'Selasa',
                        'rabu' => 'Rabu',
                        'kamis' => 'Kamis',
                        'jumat' => 'Jumat',
                        'sabtu' => 'Sabtu',
                        'minggu' => 'Minggu'
                    ])
                    ->required(),
                Forms\Components\TimePicker::make('jam')
                    
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_mentor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hari'),
                Tables\Columns\TextColumn::make('jam'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('sort')
                    // ->query(fn(Builder $query): Builder => $query->where('is_admin', 1))
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }    

    public static function canViewAny(): bool
    {
        return ! auth()->user()->is_admin;
    }
}
