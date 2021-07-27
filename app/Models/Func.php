<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Func extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'functions';
}
