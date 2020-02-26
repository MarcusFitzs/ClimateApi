@extends('layouts.app');
# @Date:   2019-11-04T19:48:33+00:00
# @Last modified time: 2019-11-04T19:56:15+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Article: {{$article->name}}
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
              <a href="{{route('admin.articles.index')}}" class="btn btn-default">Back</a>
              <a href="{{route('admin.articles.edit', $article->id)}}" class="btn btn-warning">Edit</a>
              <form style="display:inline-block" method="POST" action="{{route('admin.articles.destroy', $article->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="form-control btn btn-danger"> Delete</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
