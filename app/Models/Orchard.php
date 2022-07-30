<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orchard extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function crop()
    {
        return $this->belongsTo('App\Models\Crop');
    }
}
