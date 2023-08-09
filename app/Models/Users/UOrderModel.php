<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UOrderModel extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = ['order_date', 'total_amount', 'code', 'status_id', 'user_id', 'payment_method_id', 'created_at', 'updated_at'];

    protected $primaryKey = 'order_id';

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(UOrderItemsModel::class, 'order_id', 'order_id');
    }
}
