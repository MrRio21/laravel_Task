@extends('layouts.app')
@section('content')

<form action="{{route('posts.store')}}" method="post">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Post Title" name="title">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"  placeholder="Post Description"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Posted By</label>
    <select class="form-control" id="exampleFormControlTextarea1" rows="3" name="postedBy">
        <option value="Ahmed"> Ahmed</option>
        <option value="Ali"> Ali</option>
        <option value="Mohamed"> Mohamed</option>
    </select>
</div>
<div class="mb-3">
<input type="submit" class="btn btn-primary" id="exampleFormControlInput1">
</div>
</form>

@endsection
