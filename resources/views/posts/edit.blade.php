@extends('main')

@section('title', ' | Edit Post')
@section('stylesheets')
<link rel="stylesheet" href="/css/select2.min.css" crossorigin="anonymous">
@endsection
@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Edit Post</h1>
    <hr>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
      <div class="form-group"> 
        <label for="title">Title:</label> 
        <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea> 
      </div> 
      <div class="form-group"> 
        <label for="slug">Slug:</label> 
        <textarea type="text" class="form-control input-lg" id="slug" name="slug" rows="1" style="resize:none;">{{ $post->slug }}</textarea> 
      </div> 
      <div class="form-group">
        <label for="category_id">Category: </label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div> 
      <div class="form-group">
        <label for="tags[]">Tags: </label>
        <select name="tags[]" id="tags" class="select2-multi form-control" multiple="multiple">
          @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="body">Body:</label> 
        <textarea type="text" class="form-control input-lg" id="body" name="body" rows="10">{{ $post->body }}</textarea> 
      </div> 
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal"> 
          <dt>Created at:</dt> <dd>{{ date('M j, Y h:i:sa', strtotime($post->created_at)) }}</dd> 
        </dl> 
        <dl class="dl-horizontal"> 
          <dt>Last updated:</dt> <dd>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</dd> 
        </dl> 
        <hr> 
        <div class="row"> 
          <div class="col-sm-6"> 
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-block">View</a> 
          </div> 
          <div class="col-sm-6"> 
            <button type="submit" class="btn btn-success btn-block">Save</button> 
            <input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('PUT') }} 
          </form>﻿
        </div>
      </div>
    </div>﻿
  </div>
</div>
@endsection

@section('scripts')
<script src="/js/select2.full.min.js">`</script>
<script type="text/javascript">
  var tags = {{ $postTags }}
  $('#tags').select2();
  $('#tags').select2().val(tags).trigger('change');﻿
</script>
@endsection