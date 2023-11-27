<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $title
 * @property int $quantity
 * @property int $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ProductFactory factory($count = null, $state = [])
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereQuantity($value)
 * @method static Builder|Product whereTitle($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @property-read float|int $total_price_with_vat
 * @mixin Eloquent
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'quantity', 'price'];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }

    /**
     * @return float
     */
    public function getVatFromConfig(): float
    {
        return (float)config('my.products.vat');
    }

    /**
     * @return float|int
     */
    public function getTotalPriceWithVatAttribute()
    {
        return ($this->quantity * $this->price) * (1 + $this->getVatFromConfig());
    }
}
