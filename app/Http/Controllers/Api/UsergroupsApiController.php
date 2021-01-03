<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsergroupsCollection;
use App\Models\Usergroups;

class UsergroupsApiController extends Controller
{
    public function index()
    {
        return new UsergroupsCollection(Usergroups::paginate());
    }
}
