<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album_items extends Model
{
    use HasFactory;

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
