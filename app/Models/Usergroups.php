<?php

namespace App\Models;

use App\Http\Resources\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergroups extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
