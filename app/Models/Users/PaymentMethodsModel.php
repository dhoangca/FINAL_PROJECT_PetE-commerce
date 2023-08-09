<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodsModel extends Model
{
    use HasFactory;

    protected $table = "payment_methods"; 

    protected $fillable=['payment_method_name','created_at','updated_at'];

    protected $primaryKey ='payment_method_id';

    public $timestamps=false;
}
