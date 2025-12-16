<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Molitor\Unas\Models\UnasShop;
use Molitor\Unas\Services\UnasOrderService;

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
        $shop = UnasShop::find(1);

        $unasOrderService = app(UnasOrderService::class);
        $unasOrderService->downloadOrderByCode($shop, '27786-100028');
    }
}
