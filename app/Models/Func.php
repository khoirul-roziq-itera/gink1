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

    protected $fillable = [
        'function_Title',
        'function_Name',
        'function_Group',
        'function_FE_Duration',
        'function_FE_Cost',
        'function_FE_Price',
        'function_BE_Duration',
        'function_BE_Cost',
        'function_BE_Price',
        'function_FS_Duration',
        'function_FS_Cost',
        'function_FS_Price',
        'function_Notes',
        'function_Status'
    ];

    public function modules()
    {
        return $this->belongsToMany('App\Model\Module');
    }
}
