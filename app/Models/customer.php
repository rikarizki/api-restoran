<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class customer extends Model
{
    protected $primaryKey ='CustomerID';
    protected $table = 'customer';
    protected  $fillable = [
        'CustomerID', 'FirstName', 'LastName', 'Email', 'Phone', 'Address'
    ];
    protected $hidden = [];
}