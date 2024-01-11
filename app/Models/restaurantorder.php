<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class restaurantorder extends Model
{
    protected $primaryKey ='OrderID';
    protected $table = 'restaurantorder';
    protected  $fillable = [
        'OrderID', 'CustomerID', 'TableID', 'OrderDate', 'TotalAmount'
    ];
    protected $hidden = [];
}