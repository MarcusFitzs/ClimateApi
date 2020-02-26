@extends('layouts.app');
# @Date:   2019-11-04T18:46:42+00:00
# @Last modified time: 2019-11-04T19:15:11+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Articles
            <a href="{{route('admin.articles.create')}}" class="btn btn-primary float-right">Add</a>
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
                  <th>Actions</th>
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
                        <a href="{{route('admin.articles.show', $article->id)}}" class="btn btn-default">View</a>
                        <a href="{{route('admin.articles.edit', $article->id)}}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{route('admin.articles.destroy', $article->id)}}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <button type="submit" class="form-control btn btn-danger"> Delete</a>
                        </form>
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
