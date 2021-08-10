<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'module_Name',
        'module_FE_Duration',
        'module_FE_Cost',
        'module_FE_Price',
        'module_BE_Duration',
        'module_BE_Cost',
        'module_BE_Price',
        'module_FS_Duration',
        'module_FS_Cost',
        'module_FS_Price',
        'module_Cost_Total',
        'module_Price_Total',
        'module_Notes',
        'module_Status',
        'user_id',
        'module_slug'
    ];

    public function funcs()
    {
        return $this->belongsToMany('App\Models\Func');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function aplication()
    {
        return $this->belongsToMany('App\Model\Application');
    }
}
