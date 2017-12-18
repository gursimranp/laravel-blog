@extends('main')

@section('title', ' | View Post');

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>{{ $post->title }}</h1>
    <hr>
    <p class="lead">{{ $post->body }}</p>
    <hr>
    <div class="tags">
      @foreach ($post->tags as $tag)
        <span class="badge badge-default">{{ $tag->name }}</span>
      @endforeach
    </div>
  </div>
  <div class="col-md-4">
    <div class="well"> 
      <dl class="dl-horizontal"> 
        <dt>Slug:</dt> <dd>{{ $post->slug }}</dd> 
      </dl>  
      <dl class="dl-horizontal"> 
        <dt>Category:</dt> <dd>{{ $post->category->name }}</dd> 
      </dl> 
      <dl class="dl-horizontal"> 
        <dt>Created at:</dt> <dd>{{ date('M j, Y h:i:sa', strtotime($post->created_at)) }}</dd> 
      </dl> 
      <dl class="dl-horizontal"> 
        <dt>Last updated:</dt> <dd>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</dd> 
      </dl> 
      <hr> 
      <div class="row"> 
        <div class="col-sm-6"> 
          <form method="POST" action="{{ route('posts.destroy', $post->id) }}"> 
            <input type="submit" value="Delete" class="btn btn-danger btn-block"> 
            <input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('DELETE') }} 
          </form>﻿ 
        </div> 
        <div class="col-sm-6"> 
          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a> 
        </div> 
      </div>
    </div>
  </div>﻿
</div>
</div>﻿
@endsection