<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_finish extends Model
{
    protected $table = 'staff_finish';

    protected $fillable = ['judul', 'note', 'pemberi', 'penerima', 'date'];
}
