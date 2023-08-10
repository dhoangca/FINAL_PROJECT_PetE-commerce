<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;

    protected $table = "status"; 

    protected $fillable=['name','description','created_at','updated_at'];

    protected $primaryKey ='status_id';

    public $timestamps=false;
}
