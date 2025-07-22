<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class publicprofilecontoller extends Controller
{
  public function show ( request $request, user $user)
  {
       $post= $user->posts()->latest()->paginate(10);
     return view('profile.show', [
         'user' => $user,
         'posts' => $post,
     ]);
  }
}
