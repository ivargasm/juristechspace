<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Degree extends Model
{
    protected $fillable = [
        'code',
        'description',
        'short_name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function topics():hasMany{
        return $this->hasMany(Topic::class);
    }

    public function questions():hasMany{
        return $this->hasMany(Question::class);
    }
}
