@extends('layouts.app');
# @Date:   2019-11-04T20:19:40+00:00
# @Last modified time: 2019-11-04T20:47:59+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Articles
          </div>
          <div class="card-body">
            @if (count($articles) === 0)
              <p> There are no articles</p>
            @else
              <table id="table-articles" class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Author_Id</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>URL</th>
                  <!-- <th>UrlToImage</th>
                  <th>PublishedAt</th> -->
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                    <tr data-id="{{$article->id}}">
                      <td>{{$article->name}}</td>
                      <td>{{$article->author_id}}</td>
                      <td>{{$article->title}}</td>
                      <td>{{$article->description}}</td>
                      <td>{{$article->url}}</td>
                      <!-- <td>{{$article->urlToImage}}</td>
                      <td>{{$article->publishedAt}}</td> -->
                      <td>
                        <a href="{{route('user.articles.show', $article->id)}}" class="btn btn-primary">View</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
