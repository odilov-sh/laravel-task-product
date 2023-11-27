<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;
use Tests\CreatesApplication;

class ProductTest extends TestCase
{

    public function testProductVat()
    {
        $product = Product::inRandomOrder()->first();
        if ($product) {
            $vat = ($product->quantity * $product->price) * (1 + (float)config('my.products.vat'));
            $this->assertTrue($vat == $product->total_price_with_vat);
        }
    }
}
