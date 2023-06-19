<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = "users"; 

    protected $fillable=['username', 'password','name','email','address','phone_number']; 

    protected $primaryKey ='user_id'; 

    public $timestamps=false; 
}
