<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function regulation()
    {
        return $this->hasOne('App\Models\Regulation');
    }
    public function orchard()
    {
        return $this->hasOne('App\Models\Orchard');
    }
}
