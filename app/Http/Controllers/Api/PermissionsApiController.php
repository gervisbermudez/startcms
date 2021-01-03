<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermissionCollection;
use App\Models\Permissions;

class PermissionsApiController extends Controller
{
    public function index()
    {
        return new PermissionCollection(Permissions::paginate());
    }
}
