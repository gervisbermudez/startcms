<?php

namespace App\Models;

use App\Models\Usergroups;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    public function usergroups()
    {
        return $this->belongsToMany(Usergroups::class, 'usergroups_permissions', 'usergroups_id', 'permisions_id');
    }
}
