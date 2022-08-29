<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function store(Request $request)
    {
        //inserting
        $user = 'Inserting user to the database ....';

        event(new Registered($user));
        return;
    }

}
