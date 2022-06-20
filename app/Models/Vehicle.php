<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\User;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'chasis_no',
        'type',
        'brand',
        'colour',
        'license',
        'profile_id',
        'user_id'
    ];

    public function profile() {
        return $this->belongsTo(Profile::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
