<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        "id", "address1", "address2" , "state", "city"
    ];
    // associate profile with user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
