<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AOrderItemsModel extends Model
{
    use HasFactory;

    protected $table = "order_items"; 

    protected $fillable=['name','quantity','price','image','item_id','item_type','order_id','pet_id','product_id','created_at','updated_at'];

    protected $primaryKey ='order_item_id';

    public $timestamps=false;
}
