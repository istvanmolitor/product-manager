<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Molitor\Product\Models\Product;

class Teszt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:teszt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Product::factory()->count(10)->create();
    }
}
