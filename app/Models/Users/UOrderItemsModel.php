<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UOrderItemsModel extends Model
{
    use HasFactory;

    protected $table = "order_items"; 

    protected $fillable=['quantity','price','order_id','pet_id','product_id','created_at','updated_at'];

    protected $primaryKey ='order_item_id';

    public $timestamps=false;
}
