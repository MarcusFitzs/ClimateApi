<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // Create a new controller instance.
    public function __construct()
    {
        $this->middleware('auth');
    }


    //Show the application dashboard.
    public function index(Request $request)
    {
        $user = $request->user();
        $home = 'user.home';

        if ($user->hasRole('admin')){
          $home = 'admin.home';
        }
        else{
          $home = 'user.home';
        }

        return redirect()->route($home);
    }
}
