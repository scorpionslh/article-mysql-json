<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Config extends Model
{
    use HasFactory;

    protected $table = 'config';

    protected $fillable = [
        'defaultBackgroundColor',
        'defaultFontColor',
        'defaultFontFamily',
        'defaultFontSize',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
