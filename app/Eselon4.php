<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eselon4 extends Model
{
    

    protected $table = 'eselon4';

    protected $fillable = ['judul', 'note', 'kategori', 'date'];

    
    

    
}
