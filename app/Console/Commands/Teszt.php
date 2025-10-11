<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Molitor\ArticleParser\Services\UnasProductParser;
use Molitor\ProductParser\Services\ProductParserService;

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
        $s = new ProductParserService();
        $s->registerProductParser('kockaklub.unas.hu', UnasProductParser::class);

        $product = $s->parseUrl('https://kockaklub.unas.hu/QiYi-QiHeng');
        dd($product);
    }
}
