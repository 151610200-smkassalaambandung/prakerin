<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaturann extends Model
{
     protected $table ='pengaturann';
    protected $fillable = ['nama_situs','alamat_situs','email'];
    protected $visible = ['nama_situs','alamat_situs','email'];
    public $timestamps = true;
}
