<?php

namespace App\Models;

use App\Models\Album_items;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(Album_items::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
