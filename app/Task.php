<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopecompleted($query)
    {
        return $query->where('completed',1);
    }

    public function scopeunCompleted($query)
    {
        return $query->where('completed',0);
    }
}
