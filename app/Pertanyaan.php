<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan extends Model
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $table ='pertanyaan';
}
