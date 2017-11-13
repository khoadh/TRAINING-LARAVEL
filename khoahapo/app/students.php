<?php

namespace App;
use Illuminate\Founddation\Eloquent\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class students extends Model
{
    protected $table ="students";
    protected $primaryKey = 'students_id';
 
}
