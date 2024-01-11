<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class menu extends Model
{
    protected $primaryKey ='MenuID';
    protected $table = 'menu';
    protected  $fillable = [
        'MenuID', 'ItemName', 'Description', 'Price', 'Category'
    ];
    protected $hidden = [];
}