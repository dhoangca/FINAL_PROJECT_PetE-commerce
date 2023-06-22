<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
    use HasFactory;

    protected $table = "pets"; 

    protected $fillable=['name','breed','gender','description','quantity','user_id ','category_id','created_at','updated_at'];

    protected $primaryKey ='pet_id';

    public $timestamps=false; 
}
