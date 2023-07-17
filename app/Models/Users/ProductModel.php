<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = "products"; 

    protected $fillable=['name','description','price','image','quantity','status','category_id ','created_at','updated_at'];

    protected $primaryKey ='product_id';

    public $timestamps=false; 
}
