<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


     // Display a listing of the resource.
    public function index()
    {
        $Articles = Article::all();

        return view('user.Articles.index')->with([
          'Articles' => $Articles
        ]);
    }


     // Display the specified resource.
    public function show($id)
    {
        $Article = Article::findOrFail($id);

        return view('user.Articles.show')->with([
          'Article' => $Article
        ]);
    }
}
