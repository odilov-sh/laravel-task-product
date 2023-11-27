<?php

namespace Database\Factories;

use App\Models\ProductAudit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductAuditFactory extends Factory
{
    protected $model = ProductAudit::class;

    public function definition(): array
    {
        return [
            'product_id' => $this->faker->randomNumber(),
            'product_name' => $this->faker->name(),
            'old_values' => $this->faker->word(),
            'new_values' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
