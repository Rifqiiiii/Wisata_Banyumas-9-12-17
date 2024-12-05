<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinasiResource\Pages;
use App\Filament\Resources\DestinasiResource\RelationManagers;
use App\Models\Destinasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinasiResource extends Resource
{
    protected static ?string $model = Destinasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Destination';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_wisata'),
                Forms\Components\TextInput::make('deskripsi'),
                Forms\Components\FileUpload::make('foto'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_wisata'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\ImageColumn::make('foto')
                ->disk('public'),
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
            'index' => Pages\ListDestinasis::route('/'),
            'create' => Pages\CreateDestinasi::route('/create'),
            'edit' => Pages\EditDestinasi::route('/{record}/edit'),
        ];
    }
}
