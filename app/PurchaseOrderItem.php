<?php

namespace App;

use App\Supplier;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchase_order_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item',
        'rate',
        'quantity'
    ];

    protected function purchaseOrder()
    {
        return $this->belongsTo(Supplier::class);
    }
}
