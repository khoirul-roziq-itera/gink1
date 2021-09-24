<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'app_name',
        'app_slug',
        'user_id',
        'category_id',
        'status',
        'start_project_t',
        'end_project_t',
        'deadline_project_t',
        'app_FE_Duration',
        'app_FE_Cost',
        'app_FE_Price',
        'app_BE_Duration',
        'app_BE_Cost',
        'app_BE_Price',
        'app_FS_Duration',
        'app_FS_Cost',
        'app_FS_Price',
        'app_Cost_Total',
        'app_Price_Total',
        'app_notes'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function modules()
    {
        return $this->belongsToMany('App\Models\Module');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
