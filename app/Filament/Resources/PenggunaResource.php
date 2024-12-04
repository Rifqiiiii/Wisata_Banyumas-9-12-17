<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaResource\Pages;
use App\Filament\Resources\PenggunaResource\RelationManagers;
use App\Models\Pengguna;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
<<<<<<< HEAD
=======
    protected static ?string $navigationLabel = 'Pengguna';
    
>>>>>>> 1826384da3d10f3738ecd556cdf1d6aa715084c9

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
                //
=======
                Forms\Components\TextInput::make('username')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('password')
                ->required()
                ->maxLength(255),
>>>>>>> 1826384da3d10f3738ecd556cdf1d6aa715084c9
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                //
=======
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('password'),
>>>>>>> 1826384da3d10f3738ecd556cdf1d6aa715084c9
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPenggunas::route('/'),
            'create' => Pages\CreatePengguna::route('/create'),
            'edit' => Pages\EditPengguna::route('/{record}/edit'),
        ];
    }
}
