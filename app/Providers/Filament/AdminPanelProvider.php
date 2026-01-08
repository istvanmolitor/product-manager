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
use Molitor\Currency\Filament\Resources\ExchangeRateResource;
use Molitor\CustomerProduct\Filament\Pages\CustomerCategoriesPage;
use Molitor\CustomerProduct\Filament\Resources\CustomerProductCategoryResource;
use Molitor\CustomerProduct\Filament\Resources\CustomerProductResource;
use Molitor\CustomerProduct\Filament\Resources\CustomerListResource;
use Molitor\Language\Filament\Resources\LanguageResource;
use Molitor\Order\Filament\Resources\OrderResource;
use Molitor\Product\Filament\Resources\BarcodeResource;
use Molitor\Product\Filament\Resources\ProductCategoryResource;
use Molitor\Product\Filament\Resources\ProductFieldOptionResource;
use Molitor\Product\Filament\Resources\ProductFieldResource;
use Molitor\Product\Filament\Resources\ProductResource;
use Molitor\Product\Filament\Resources\ProductUnitResource;
use Molitor\Product\Filament\Pages\ProductCategoriesPage;
use Molitor\Purchase\Filament\Resources\PurchaseResource;
use Molitor\Purchase\Filament\Resources\PurchaseStatusResource;
use Molitor\Setting\Filament\Pages\SettingsPage;
use Molitor\Stock\Filament\Resources\WarehouseProductResource;
use Molitor\Stock\Filament\Resources\StockMovementResource;
use Molitor\Stock\Filament\Resources\ProductResource as StockProductResource;
use Molitor\Unas\Filament\Resources\UnasProductResource;
use Molitor\Unas\Filament\Resources\UnasProductCategoryResource;
use Molitor\Unas\Filament\Resources\UnasProductParameterResource;
use Molitor\Unas\Filament\Resources\UnasShopResource;
use Molitor\Unas\Filament\Pages\UnasProductCategoriesPage;
use Molitor\Customer\Filament\Resources\CustomerGroupResource;
use Molitor\Customer\Filament\Resources\CustomerResource;
use Molitor\Address\Filament\Resources\CountryResource;
use Molitor\Order\Filament\Resources\OrderStatusResource;
use Molitor\Order\Filament\Resources\OrderPaymentResource;
use Molitor\Order\Filament\Resources\OrderShippingResource;
use Molitor\Stock\Filament\Resources\WarehouseResource;
use Molitor\Stock\Filament\Resources\WarehouseRegionResource;
use Molitor\Unas\Filament\Widgets\ProductCountWidget;
use Molitor\Scraper\Filament\Widgets\ScraperLinksWidget;
use Molitor\Scraper\Filament\Pages\ScraperDashboard;
use Molitor\User\Filament\Resources\PermissionResource;
use Molitor\User\Filament\Resources\UserGroupResource;
use Molitor\User\Filament\Resources\UserResource;
use Molitor\Scraper\Filament\Resources\ScraperResource;
use Molitor\Scraper\Filament\Resources\ScraperUrlResource;
use Molitor\Cms\Filament\Resources\ContentRegionResource;
use Molitor\Cms\Filament\Resources\PageResource;
use Molitor\Cms\Filament\Resources\MenuResource;
use Molitor\Cms\Filament\Resources\MenuItemResource;

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
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->resources([
                CurrencyResource::class,
                ExchangeRateResource::class,
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
                OrderPaymentResource::class,
                OrderShippingResource::class,
                OrderResource::class,
                WarehouseResource::class,
                WarehouseRegionResource::class,
                StockProductResource::class,
                UnasShopResource::class,
                UnasProductCategoryResource::class,
                UnasProductResource::class,
                UnasProductParameterResource::class,
                BarcodeResource::class,
                UserGroupResource::class,
                PermissionResource::class,
                UserResource::class,
                PurchaseResource::class,
                PurchaseStatusResource::class,
                StockMovementResource::class,
                ScraperResource::class,
                ScraperUrlResource::class,
                CustomerProductResource::class,
                CustomerProductCategoryResource::class,
                CustomerListResource::class,
                ScraperResource::class,
                ContentRegionResource::class,
                PageResource::class,
                MenuResource::class,
                MenuItemResource::class,
            ])
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
                SettingsPage::class,
                ScraperDashboard::class,
                CustomerCategoriesPage::class,
                ProductCategoriesPage::class,
                UnasProductCategoriesPage::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                ProductCountWidget::class,
                ScraperLinksWidget::class,
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
