<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    public function user():BelongsTo

    {
        return $this->BelongsTo(user::class);
    }

    
}
