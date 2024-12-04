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
                Forms\Components\TextInput::make('lokasi_wisata'),
                Forms\Components\TextInput::make('harga_tiket'),
                Forms\Components\TextInput::make('fasilitas'),
                Forms\Components\RichEditor::make('deskripsi'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_wisata'),
                Tables\Columns\TextColumn::make('lokasi_wisata'),
                Tables\Columns\TextColumn::make('harga_tiket'),
                Tables\Columns\TextColumn::make('fasilitas'),
                Tables\Columns\TextColumn::make('deskripsi')
                ->formatStateUsing(fn (string $state): string => strip_tags($state))
                ->label('deskripsi'),
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
