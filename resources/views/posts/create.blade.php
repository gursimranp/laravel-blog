@extends('main')

@section('title', ' | Create New Post');

@section('stylesheets')
<link rel="stylesheet" href="/css/select2.min.css" crossorigin="anonymous">
@endsection

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    <form method="POST" action="{{ route('posts.store') }}">
      <div class="form-group">
        <label name="title">Title:</label>
        <input id="title" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label name="slug">Slug:</label>
        <input id="slug" name="slug" class="form-control">
      </div>
      <div class="form-group">
        <label name="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tags[]">Tags:</label>
        <select name="tags[]" id="tags" class="form-control select2-multi" multiple="multiple">
          @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label name="body">Post Body:</label>
        <textarea id="body" name="body" rows="5" class="form-control"></textarea>
      </div>
      <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
  </div>
</div>﻿
@endsection

@section('scripts')

<script src="/js/select2.full.min.js"></script>
<script type="text/javascript">
  $('.select2-multi').select2();
</script>

@endsection