@extends('layouts.app');
# @Date:   2019-11-04T18:15:24+00:00
# @Last modified time: 2019-12-02T15:26:00+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit article
          </div>
          <div class="card-body">
            @if  ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form method="POST" action="{{route('admin.articles.update', $article->id)}}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="name">Names</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $article->name)}}" />
              </div>
              <div class="form-group">
                <label for="author_id">Author IDs</label>
                <input type="text" class="form-control" id="author_id" name="author_id" value="{{old('author_id', $article->author_id)}}" />
              </div>
              <div class="form-group">
                <label for="title">Titles</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $article->title)}}" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description', $article->description)}}" />
              </div>
              <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{old('url', $article->url)}}" />
              </div>
              <!-- <div class="form-group">
                <label for="urlToImage">Price</label>
                <input type="text" class="form-control" id="urlToImage" name="urlToImage" value="{{old('urlToImage', $article->urlToImage)}}" />
              </div>
              <div class="form-group">
                <label for="publishedAt">Price</label>
                <input type="text" class="form-control" id="publishedAt" name="publishedAt" value="{{old('publishedAt', $article->publishedAt)}}" />
              </div> -->
              <a href="{{route('admin.articles.index')}}" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
