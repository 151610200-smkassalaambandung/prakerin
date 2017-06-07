<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggunaa extends Model
{
     protected $table ='penggunaa';
    protected $fillable = ['nama_lengkap','alamat'];
    protected $visible = ['nama_lengkap','alamat'];
    public $timestamps = true;
}
