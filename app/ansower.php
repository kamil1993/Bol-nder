<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ansower extends Model
{
    public $table = "ansowers";
    public function quistion(){
        return $this->belongsTo(quistion::class);
    }
}
