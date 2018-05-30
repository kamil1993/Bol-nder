<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quistion extends Model
{
    public $table = "quistions";
    public function ansowers()
{
    return $this->hasMany(ansower::class);
}
}
