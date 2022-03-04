@extends('layouts.app')


@section('content')
<div class="container">
  <div class="col-12 shadow p-3 mb-5 bg-white rounded my-5">
      <p>Posts</p>

      <form action="{{route('posts')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Body</label>
          <textarea name="body" class="form-control  @error('body') border-danger @enderror" id="post_body" placeholder="post something" rows="3"></textarea>
        </div>

        @error('body')
          <div class="text-danger text-sm my-2">
              {{ $message }}
          </div>
        @enderror
        <button type="submit" class="btn btn-primary">POST</button>
      </form>

      @if($posts->count())
        @foreach($posts as $post)
          <div>
            <a href="#">{{ $post->user->name}}</a><span>{{$post->user->created_at->diffForHumans()}}</span>
            <p>{{$post->body}}</p>
            
            <div class="d-flex">
                <form action="{{route('posts.like',$post->id)}}" method="post">
                  @csrf
                  <button type="submit" class="text-primary btn btn-link">Like</button>
                </form>
                <form action="">
                  @csrf
                  <button type="submit" class="text-primary btn btn-link">Unlike</button>
                </form>
                <span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
            </div>
          </div>
        @endforeach
      @else
        <p>No posts found</p>
      @endif

  </div>
</div>
@endsection
