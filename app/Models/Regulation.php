<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function crop()
    {
        return $this->belongsTo('App\Models\Crop');
    }
}
