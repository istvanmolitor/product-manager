<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Molitor\Product\Models\Product;
use Molitor\Product\Services\Dto\ProductDtoService;

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
        $p = Product::find(1);

        /** @var ProductDtoService $ps */
        $ps = app(ProductDtoService::class);
        $dto = $ps->makeDto($p);
        dd($dto);
    }
}
