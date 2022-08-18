<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UsersJson extends Model
{
    use HasFactory;

    protected $table = 'users_json';
    protected $fillable = [
        'name', 'email', 'password', 'address', 'config', 'contact'
    ];

}
