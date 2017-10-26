<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yayasan extends Model
{
    protected $fillable = ['nama_yayasan', 'sejarah','logo','alamat','gambar'];
}
