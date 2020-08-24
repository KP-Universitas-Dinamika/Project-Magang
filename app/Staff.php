<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = ['tugas_staff', 'tugas_note', 'tugas_kategori', 'tugas_date'];
}
