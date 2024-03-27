<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table ='cars';
    protected $primaryKey = 'car_id';
    protected $fillable =[
        'model',
        'category',
        'image',
        'price',
        'availability',
    ];
    
}
