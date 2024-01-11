<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class restauranttable extends Model
{
    protected $primaryKey ='TableID';
    protected $table = 'menu';
    protected  $fillable = [
        'TableID', 'TableNumber', 'Capacity', 'Status'
    ];
    protected $hidden = [];
}