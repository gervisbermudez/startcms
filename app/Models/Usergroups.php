<?php

namespace App\Models;

use App\Models\Permissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergroups extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'usergroups_permissions', 'usergroups_id', 'permisions_id');
    }
}
