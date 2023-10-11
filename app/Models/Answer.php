<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Answer extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function question(): belongsTo
    {
        return $this->belongsTo(Question::class);    
    }
}
