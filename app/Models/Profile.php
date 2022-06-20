<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Vehicle;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'phone',
        'state',
        'address',
        'bioid'
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
