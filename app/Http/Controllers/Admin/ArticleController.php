<?php
# @Date:   2019-12-02T13:19:30+00:00
# @Last modified time: 2020-02-26T20:03:09+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }

     // Display a listing of the resource.
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index')->with([
          'articles' => $articles
        ]);
    }


     // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.articles.create');
    }


     // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|max:191',
          'author_id' => 'required|integer|min:0',
          'title' => 'required|max:191',
          'description' => 'required|max:191',
          'detailedDesc' => 'required|max:10000',
          'url' => 'required|max:191'
          //'urlToImage' => 'required|max:191',
          //'publishedAt' => 'required|max:191'
        ]);

        $article = new Article();
        $article->name = $request->input('name');
        $article->author_id = $request->input('author_id');
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->detailedDesc = $request->input('detailedDesc');
        $article->url = $request->input('url');
        //$article->urlToImage = $request->input('urlToImage');
        //$article->publishedAt = $request->input('publishedAt');

        $article->save();

        return redirect()->route('admin.articles.index');
    }


    // Display the specified resource.
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.show')->with([
          'article'=> $article
        ]);
    }


     // Show the form for editing the specified resource.
    public function edit($id)
    {
      $article = Article::findOrFail($id);

      return view('admin.articles.edit')->with([
        'article'=> $article
      ]);
    }


    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
      $article = Article::findOrFail($id);

      $request->validate([
        'name' => 'required|max:191',
        'author_id' => 'required|integer|min:0',
        'title' => 'required|max:191',
        'description' => 'required|max:191',
        'detailedDesc' => 'required|max:10000',
        'url' => 'required|max:191'
        //'urlToImage' => 'required|max:191',
        //'publishedAt' => 'required|max:191'
      ]);

      $article = new Article();
      $article->name = $request->input('name');
      $article->author_id = $request->input('author_id');
      $article->title = $request->input('title');
      $article->description = $request->input('description');
      $article->detailedDesc = $request->input('detailedDesc');
      $article->url = $request->input('url');
      //$article->urlToImage = $request->input('urlToImage');
      //$article->publishedAt = $request->input('publishedAt');

      $article->save();

      return redirect()->route('admin.articles.index');

    }


     // Remove the specified resource from storage.
    public function destroy($id)
    {
      $article = Article::findOrFail($id);

      $article->delete();

      return redirect()->route('admin.articles.index');
    }
}
