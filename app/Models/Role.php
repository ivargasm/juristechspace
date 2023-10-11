<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    protected $fillable = ['description'];

    /**
     * Get the user associated with the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }


}
