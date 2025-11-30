<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Molitor\Address\database\seeders\AddressSeeder;
use Molitor\Cms\database\seeders\CmsSeeder;
use Molitor\Currency\database\seeders\CurrencySeeder;
use Molitor\Customer\database\seeders\CustomerSeeder;
use Molitor\CustomerProduct\database\seeders\CustomerProductSeeder;
use Molitor\Language\database\seeders\LanguageSeeder;
use Molitor\Order\database\seeders\OrderSeeder;
use Molitor\Product\database\seeders\ProductSeeder;
use Molitor\Purchase\database\seeders\PurchaseSeeder;
use Molitor\Scraper\database\seeders\ScraperSeeder;
use Molitor\Setting\database\seeders\SettingSeeder;
use Molitor\Stock\database\seeders\StockSeeder;
use Molitor\Unas\database\seeders\UnasSeeder;
use Molitor\User\database\seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            CurrencySeeder::class,
            LanguageSeeder::class,
            ProductSeeder::class,
            AddressSeeder::class,
            OrderSeeder::class,
            StockSeeder::class,
            UnasSeeder::class,
            CustomerSeeder::class,
            PurchaseSeeder::class,
            CustomerProductSeeder::class,
            ScraperSeeder::class,
            CmsSeeder::class,
        ]);
    }
}
