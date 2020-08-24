<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_progress extends Model
{
    protected $table = 'staff_progress';

    protected $fillable = ['judul', 'note', 'kategori', 'date'];
}
