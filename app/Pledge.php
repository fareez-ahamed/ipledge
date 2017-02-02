<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    protected $guarded = ['id'];

    public function scopeDefault($query)
    {
        return $query->where('default', true);
    }

}
