<?php

namespace App;

use App\Supplier;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchase_orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference_number',
        'billing_address',
        'expected_delivery_date',
        'shipment_preferences'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function items()
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }
}
