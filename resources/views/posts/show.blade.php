@extends('layouts.app')
@section('content')

<div class="card container">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
    <h5 class="card-title"> <h3>Title:</h3> {{$post['title']}}</h5>
    <p class="card-text"> <h3>Description:</h3> {{$post['description']}}</p>
    <p class="card-text">  <h3>Created_at:</h3> {{$post['created_at']}}</p>
  </div>
</div>
<br>
<hr class="container">
<br>
<div class="card container">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
    <h5 class="card-title"> <h3>Creator:</h3>{{$post['Posted_by']}} </h5>
    <p class="card-text"> <h3>Email:</h3>{{$post['email']}}</p>
  </div>
</div>

@endsection
