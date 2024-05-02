<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showComments(User $user)
    {
        $comments = $user->comments()->paginate(10);

        return view('users.comments', compact('user', 'comments'));
    }
}
