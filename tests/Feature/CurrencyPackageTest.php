<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyPackageTest extends TestCase
{
    /** @test */
    public function container_can_resolve_currency_repository_interface()
    {
        $instance = app()->make(\Molitor\Currency\Repositories\CurrencyRepositoryInterface::class);
        $this->assertNotNull($instance);
    }
}
