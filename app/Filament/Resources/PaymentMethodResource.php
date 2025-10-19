<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentMethodResource\Pages;
use App\Models\PaymentMethod;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaymentMethodResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?int $navigationSort = 1;
    protected static ?string $pluralLabel = 'Metode Pembayaran';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Metode (Contoh: BCA, GoPay)')
                            ->required(),
                        Forms\Components\Select::make('type')
                            ->label('Tipe')
                            ->options([
                                'Bank' => 'Bank Transfer',
                                'E-Wallet' => 'E-Wallet',
                                'QRIS' => 'QRIS',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('account_name')
                            ->label('Atas Nama'),
                        Forms\Components\TextInput::make('account_number')
                            ->label('Nomor Rekening / Telepon'),
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo atau Kode QR')
                            ->image()
                            ->directory('payment-logos')
                            ->visibility('public'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktifkan Metode Ini')
                            ->default(true),
                        Forms\Components\Textarea::make('instructions')
                            ->label('Instruksi Tambahan (Opsional)')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->label('Logo'),
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
                Tables\Columns\BadgeColumn::make('type')->label('Tipe'),
                Tables\Columns\TextColumn::make('account_number')->label('Nomor Akun'),
                Tables\Columns\IconColumn::make('is_active')->label('Status Aktif')->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->reorderable('name');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaymentMethods::route('/'),
            'create' => Pages\CreatePaymentMethod::route('/create'),
            'edit' => Pages\EditPaymentMethod::route('/{record}/edit'),
        ];
    }
}
