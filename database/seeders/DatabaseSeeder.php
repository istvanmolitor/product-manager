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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CurrencySeeder::class,
            LanguageSeeder::class,
            ProductSeeder::class,
            AddressSeeder::class,
            OrderSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
