<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_hasil extends Model
{
    protected $table = 'staff_hasil';

    protected $fillable = ['judul', 'note', 'pemberi', 'penerima', 'date', 'file'];
}
