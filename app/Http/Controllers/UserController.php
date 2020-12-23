<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        // return User::all()->map(function($user){
        //     $user->age = 33;
        //     return $user;
        // });

        // return User::all()->append('age');
        // return User::all()->append(['age', 'gente', 'address']);
        return User::all();
     }

    public function show(User $user) {
        return $user;
        // return $user->append('age');
        // return $user->setAppends(['age', 'outros']);
    }

    public function resource() {
        $users = User::all();
        return UserResource::collection($users);
     }
}
