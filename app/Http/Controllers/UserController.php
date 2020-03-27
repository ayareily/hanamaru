<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();
 
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function edit(string $name)
    {
        $user = User::where('name', $name)->first();
 
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('home');
    }


}
