<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['tag_name', 'tag_slug', 'user_id'];

    public function application()
    {
        return $this->belongsToMany('App\Models\Application');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
