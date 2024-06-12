<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boletim extends Model
{
    use SoftDeletes;
    
    protected $connection = 'mysql';
    protected $table = 'boletim';
    protected $primaryKey = 'id';
    protected $fillable = [];

}