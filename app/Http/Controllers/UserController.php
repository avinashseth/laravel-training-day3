<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function getUsers() {
        
        $users = User::select('id','name','email')
            ->orderBy('id','desc')
            ->paginate(10);

        return view('sample', compact('users'));

    }

    function getAddNewUser() {

        // fetch the data from form
        // validate the data
        // then save the data

        // add new user

        $user = new User;
        $user->name = 'Avinash ' . rand(1000,9999);
        $user->email = 'avinash.' . rand(1000,9999) . '@outlook.com';
        $user->password = 'P@$$\/\/0rD';
        $user->save();

        return redirect()->route('get-homepage');

    }

    function getUpdateUser($user_id) {

        $user = User::where('id', $user_id)->first();
        $user->name = rand(1000,9999);
        $user->email = uniqid();
        $user->save();

        return redirect()->route('get-homepage');

    }

    function getDeleteUser($user_id) {

        $user = User::where('id', $user_id)->first();
        $user->delete();

        return redirect()->route('get-homepage');
    
    }

    function getUserDetails($user_id) {

        $userDetails = User::select('id','name','email','password')
            ->where('id', $user_id)
            ->limit(1)
            ->get();
        
        return view('user', compact('userDetails'));

    }
}
