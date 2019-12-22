<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    // associate profile with user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
