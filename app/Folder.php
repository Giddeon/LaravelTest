<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ["name"];

    public function files()
    {
        return $this->hasMany(File::class);
    }
//
    public function user() {
        return $this->belongsTo(User::class);
    }
}
