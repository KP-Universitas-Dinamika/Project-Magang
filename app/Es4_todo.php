<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Es4_todo extends Model
{
    protected $table = 'es4_todo';

    protected $fillable = ['judul', 'note', 'kategori', 'date'];
}
