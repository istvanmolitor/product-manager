<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Molitor\Address\database\seeders\AddressSeeder;
use Molitor\Currency\database\seeders\CurrencySeeder;
use Molitor\Language\database\seeders\LanguageSeeder;
use Molitor\Order\database\seeders\OrderSeeder;
use Molitor\Product\database\seeders\ProductSeeder;
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
            CurrencySeeder::class,
            LanguageSeeder::class,
            ProductSeeder::class,
            AddressSeeder::class,
            OrderSeeder::class,
            StockSeeder::class,
            UnasSeeder::class,
        ]);
    }
}
