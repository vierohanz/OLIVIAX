<?php

namespace App\Http\Controllers;

use App\Http\Resources\profileResource;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{

    public function profileDinkes(): profileResource
    {
        $auth = Auth::user();
        if ($auth->role != 1) {
            abort(403, 'Unauthorized');
        }
        return new profileResource($auth);
    }
    public function profilePosyandu(): profileResource
    {
        $auth = Auth::user();
        if ($auth->role != 2) {
            abort(403, 'Unauthorized');
        }
        return new profileResource($auth);
    }

    public function profileIbu(): profileResource
    {
        $auth = Auth::user();
        if ($auth->role != 3) {
            abort(403, 'Unauthorized');
        }
        return new profileResource($auth);
    }
}
