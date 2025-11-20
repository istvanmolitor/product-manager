<?php

use Molitor\ProductScraper\Services\PageParsers\UnasPageParser;

return [
    'parsers' => [
        'https://kockaklub.hu' => UnasPageParser::class,
    ],
];
