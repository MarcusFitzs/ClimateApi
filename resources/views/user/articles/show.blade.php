@extends('layouts.app');
# @Date:   2019-11-04T20:19:49+00:00
# @Last modified time: 2019-11-04T20:49:12+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Article: {{$article->title}}
          </div>
          <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Name</td>
                    <td>{{$article->name}}</td>
                  </tr>
                  <tr>
                    <td>Author's ID</td>
                    <td>{{$article->author_id}}</td>
                  </tr>
                  <tr>
                    <td>title</td>
                    <td>{{$article->title}}</td>
                  </tr>
                  <tr>
                    <td>Description</td>
                    <td>{{$article->description}}</td>
                  </tr>
                  <tr>
                    <td>URL</td>
                    <td>{{$article->url}}</td>
                  </tr>
                  <!-- <tr>
                    <td>UrlToImage</td>
                    <td>{{$article->UrlToImage}}</td>
                  </tr>
                  <tr>
                    <td>publishedAt</td>
                    <td>{{$article->publishedAt}}</td>
                  </tr> -->
                </tbody>
              </table>

              <a href="{{route('user.articles.index')}}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
