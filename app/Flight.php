<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //mysql table name
    protected $table = 'flights';

    //Primary key
    public $primaryKey = 'id';
}
