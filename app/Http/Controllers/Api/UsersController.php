<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends ApiController
{
    public function index()
    {
        $users = User::all();
        $result = ['result' => $users];
        return $this->respond($result);
    }

    public function show($userid)
    {
        $user = User::findOrFail($userid);
        return $this->respond($user);
    }

    public function send_ticket(Request $request, User $user)
    {
        $user->update($request->all());
        switch ($request->input('id_ticket')) {
            case 1:
                $user->tickets()->create(['impact' => 170]);
                break;
            case 2:
                $user->tickets()->create(['impact' => 250]);
                break;
            case 3:
                $user->tickets()->create(['impact' => 480]);
                break;
        }
        return $this->respond($user);
    }
}