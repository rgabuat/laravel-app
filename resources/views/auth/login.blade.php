@extends('layouts.app')


@section('content')
<div class="container">
  <div class="col-4 mx-auto shadow p-3 mb-5 bg-white rounded my-5">
      <p>Register</p>
      @if(session('status'))
      <div class="bg-danger text-center">
        {{session('status')}}
      </div>
      @endif
      <form action="{{route('login')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="email" value="{{old('email')}}">
            @error('email')
            <div class="text-danger text-sm my-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control @error('password') border-danger @enderror" id="password">
            @error('password')
            <div class="text-danger text-sm my-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary">LOGIN</button>
      </form>
  </div>
</div>
@endsection