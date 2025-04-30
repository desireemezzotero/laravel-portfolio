<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function portofolios(){
        return $this->belongsToMany(Portfolio::class);
    }
}
