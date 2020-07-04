<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan extends Model
{
    protected $table ='pertanyaan';
    protected $fillable =['judul','isi_pertanyaan'];
}
