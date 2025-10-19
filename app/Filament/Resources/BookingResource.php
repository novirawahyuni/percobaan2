<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Manajemen Bengkel';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Booking')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Pelanggan')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->live() // <-- Membuat field ini reaktif
                            ->required(),
                        Forms\Components\Select::make('kendaraan_id')
                            ->label('Kendaraan')
                            ->options(fn (Forms\Get $get): Collection => Kendaraan::query()
                                ->where('user_id', $get('user_id'))
                                ->pluck('plate_number', 'id'))
                            ->searchable()
                            ->required(),
                        Forms\Components\DatePicker::make('booking_date')
                            ->label('Tanggal Booking')
                            ->required(),
                        Forms\Components\TimePicker::make('booking_time')
                            ->label('Waktu Booking')
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'menunggu_konfirmasi' => 'Menunggu Konfirmasi',
                                'dikonfirmasi' => 'Dikonfirmasi',
                                'sedang_dikerjakan' => 'Sedang Dikerjakan',
                                'selesai' => 'Selesai',
                                'dibatalkan' => 'Dibatalkan',
                            ])
                            ->required(),
                        Forms\Components\Textarea::make('notes')
                            ->label('Catatan dari Pelanggan')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Layanan & Produk')
                    ->schema([
                        Forms\Components\Select::make('layanans')
                            ->label('Layanan yang Dipesan')
                            ->relationship('layanans', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable(),
                        // Anda bisa menambahkan relasi produk di sini jika diperlukan
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking_code')
                    ->label('Kode Booking')
                    ->searchable()
                    ->copyable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kendaraan.plate_number')
                    ->label('No. Polisi'),
                Tables\Columns\TextColumn::make('booking_date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('booking_time')
                    ->label('Waktu')
                    ->time('H:i'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'menunggu_konfirmasi',
                        'primary' => 'dikonfirmasi',
                        'info' => 'sedang_dikerjakan',
                        'success' => 'selesai',
                        'danger' => 'dibatalkan',
                    ])
                    ->formatStateUsing(fn (string $state): string => str_replace('_', ' ', Str::title($state))),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'menunggu_konfirmasi' => 'Menunggu Konfirmasi',
                        'dikonfirmasi' => 'Dikonfirmasi',
                        'sedang_dikerjakan' => 'Sedang Dikerjakan',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            // 'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
