<?php
# @Date:   2019-12-02T13:53:47+00:00
# @Last modified time: 2019-12-02T13:56:30+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user');
  }

  public function index(){
    return view('user.home');
  }
}
