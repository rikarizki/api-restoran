<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class orderdetails extends Model
{
    protected $primaryKey ='DetailID';
    protected $table = 'orderdetails';
    protected  $fillable = [
        'DetailID', 'OrderID', 'MenuID', 'Quantity', 'Subtotal'
    ];
    protected $hidden = [];
}