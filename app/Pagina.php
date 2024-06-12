<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagina extends Model
{
    use SoftDeletes;
    
    protected $connection = 'mysql';
    protected $table = 'pagina';
    protected $primaryKey = 'id';
    protected $fillable = [];

}