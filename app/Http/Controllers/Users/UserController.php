<?php


namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * @param Request $request
     * @return null
     */
    public function store(Request $request)
    {
        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->username = $request->username;
        $users->password = Hash::make($request->password);
        $users->save();
        return $users;
    }

}