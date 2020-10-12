<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_todo extends Model
{
    protected $table = 'staff_todo';

    protected $fillable = ['judul', 'note', 'pemberi', 'penerima', 'date'];
}
