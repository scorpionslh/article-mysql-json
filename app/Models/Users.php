<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function config(): HasOne
    {
        return $this->hasOne(Config::class);
    }

    public function contact(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
    
}
