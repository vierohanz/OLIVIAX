<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Resources\loginResource;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(loginRequest $request): loginResource
    {
        $data = $request->validated();
        $user = Users::where('username', $data['username'])->first();
        $user->token = $user->createToken('auth_token')->plainTextToken;
        return new loginResource($user);
    }
}
