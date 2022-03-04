@extends('layouts.app')


@section('content')
<div class="container">
  <div class="col-4 mx-auto shadow p-3 mb-5 bg-white rounded my-5">
      <p>Register</p>

      <form action="{{route('register')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control @error('name') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
            @error('name')
            <div class="text-danger text-sm my-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" name="username" class="form-control @error('username') border-danger @enderror" id="username" value="{{old('username')}}">
            @error('username')
            <div class="text-danger text-sm my-2">
                {{ $message }}
            </div>
            @enderror
          </div>
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
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm-Password</label>
            <input type="password" name="cpassword" class="form-control @error('cpassword') border-danger @enderror" id="cpassword">
            @error('cpassword')
            <div class="text-danger text-sm my-2">
                {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection