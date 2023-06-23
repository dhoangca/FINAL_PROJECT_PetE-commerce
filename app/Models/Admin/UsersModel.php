<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UsersModel extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    protected $table = "users"; 

    protected $fillable=['username', 'password','name','email','address','phone_number','status','remember_token','created_at','updated_at']; 

    protected $primaryKey ='user_id'; 
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 
}
