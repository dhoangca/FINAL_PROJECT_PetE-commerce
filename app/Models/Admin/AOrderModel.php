<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AOrderModel extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = ['order_date', 'total_amount', 'code', 'status_id', 'user_id', 'payment_method_id', 'created_at', 'updated_at'];

    protected $primaryKey = 'order_id';

    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(StatusModel::class, 'status_id');
    }

    public function user()
    {
        return $this->belongsTo(UsersModel::class, 'user_id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentMethodModel::class, 'payment_method_id');
    }

    public function orderItems()
    {
        return $this->hasMany(AOrderItemsModel::class, 'order_id');
    }
}
