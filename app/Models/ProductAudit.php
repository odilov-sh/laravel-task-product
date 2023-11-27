<?php

namespace App\Models;

use Database\Factories\ProductAuditFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductAudit
 *
 * @property int $id
 * @property int $product_id
 * @property string $event
 * @property string|null $product_name
 * @property string|null $old_values
 * @property string|null $new_values
 * @property int|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ProductAuditFactory factory($count = null, $state = [])
 * @method static Builder|ProductAudit newModelQuery()
 * @method static Builder|ProductAudit newQuery()
 * @method static Builder|ProductAudit query()
 * @method static Builder|ProductAudit whereCreatedAt($value)
 * @method static Builder|ProductAudit whereEvent($value)
 * @method static Builder|ProductAudit whereId($value)
 * @method static Builder|ProductAudit whereNewValues($value)
 * @method static Builder|ProductAudit whereOldValues($value)
 * @method static Builder|ProductAudit whereProductId($value)
 * @method static Builder|ProductAudit whereProductName($value)
 * @method static Builder|ProductAudit whereUpdatedAt($value)
 * @method static Builder|ProductAudit whereUserId($value)
 * @mixin Eloquent
 */
class ProductAudit extends Model
{
    protected $fillable = ['product_id', 'product_name', 'old_values', 'new_values', 'user_id', 'event'];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];
}
