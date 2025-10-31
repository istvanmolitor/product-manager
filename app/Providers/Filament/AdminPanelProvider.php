<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Molitor\Currency\Filament\Resources\CurrencyResource;
use Molitor\Language\Filament\Resources\LanguageResource;
use Molitor\Order\Filament\Resources\OrderResource;
use Molitor\Product\Filament\Resources\BarcodeResource;
use Molitor\Product\Filament\Resources\ProductCategoryResource;
use Molitor\Product\Filament\Resources\ProductFieldOptionResource;
use Molitor\Product\Filament\Resources\ProductFieldResource;
use Molitor\Product\Filament\Resources\ProductResource;
use Molitor\Product\Filament\Resources\ProductUnitResource;
use Molitor\Purchase\Filament\Resources\PurchaseResource;
use Molitor\Purchase\Filament\Resources\PurchaseStatusResource;
use Molitor\Setting\Filament\Pages\SettingsPage;
use Molitor\Stock\Filament\Resources\WarehouseProductResource;
use Molitor\Stock\Filament\Resources\StockMovementResource;
use Molitor\Unas\Filament\Resources\UnasProductResource;
use Molitor\Unas\Filament\Resources\UnasShopResource;
use Molitor\Customer\Filament\Resources\CustomerGroupResource;
use Molitor\Customer\Filament\Resources\CustomerResource;
use Molitor\Address\Filament\Resources\CountryResource;
use Molitor\Order\Filament\Resources\OrderStatusResource;
use Molitor\Stock\Filament\Resources\WarehouseResource;
use Molitor\Stock\Filament\Resources\WarehouseRegionResource;
use Molitor\Unas\Filament\Widgets\ProductCountWidget;
use Molitor\User\Filament\Resources\PermissionResource;
use Molitor\User\Filament\Resources\UserGroupResource;
use Molitor\User\Filament\Resources\UserResource;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->resources([
                CurrencyResource::class,
                LanguageResource::class,
                ProductUnitResource::class,
                ProductFieldResource::class,
                ProductFieldOptionResource::class,
                ProductResource::class,
                ProductCategoryResource::class,
                CustomerGroupResource::class,
                CustomerResource::class,
                CountryResource::class,
                OrderStatusResource::class,
                OrderResource::class,
                WarehouseResource::class,
                WarehouseRegionResource::class,
                UnasShopResource::class,
                UnasProductResource::class,
                BarcodeResource::class,
                UserGroupResource::class,
                PermissionResource::class,
                UserResource::class,
                PurchaseResource::class,
                PurchaseStatusResource::class,
                WarehouseProductResource::class,
                StockMovementResource::class,
            ])
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
                SettingsPage::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                ProductCountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
