<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    protected $fillable = [
        'description',
        'degree_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function degree():BelongsTo{
        return $this->belongsTo(Degree::class);    
    }

    /**
     * The roles that belong to the Topic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class);
    }

    public function questions():hasMany{
        return $this->hasMany(Question::class);
    }

}
