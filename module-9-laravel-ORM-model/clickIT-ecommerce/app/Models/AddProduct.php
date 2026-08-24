<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddProduct extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "catid","photo","pname","oldprice","newprice","qty","descriptions"
    ];

    protected $table="products";
}
