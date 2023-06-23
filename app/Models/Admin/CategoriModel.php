<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriModel extends Model
{
    use HasFactory;

    protected $table = "categories"; 

    protected $fillable=['name','description','created_at','updated_at'];

    protected $primaryKey ='category_id';

    public $timestamps=false;
}
