<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UOrderItemsModel extends Model
{
    use HasFactory;

    protected $table = "order_items";

    protected $fillable = ['name','quantity', 'price','image','order_id', 'item_id', 'item_type', 'created_at', 'updated_at'];

    protected $primaryKey = 'order_item_id';

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(UOrderModel::class, 'order_id', 'order_id');
    }
}
