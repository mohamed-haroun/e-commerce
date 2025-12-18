<?php

namespace App\Models;

use App\Enums\ChangeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryLogs extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryLogsFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'variation_id',
        'quantity_change',
        'previous_quantity',
        'new_quantity',
        'reference_type',
        'reference_id',
        'changed_by',
        'notes',
        'change_type',
    ];

    protected function casts(): array
    {
        return [
            'quantity_change' => 'integer',
            'previous_quantity' => 'integer',
            'new_quantity' => 'integer',
            'change_type' => ChangeType::class,
        ];
    }

    /** Relationships */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function variation()
    {
        return $this->belongsTo(ProductVariant::class, 'variation_id');
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }

    public function reference()
    {
        return $this->morphTo();
    }

}
