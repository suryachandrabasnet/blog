<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostUserController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
