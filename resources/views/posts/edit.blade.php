@extends('layouts.app')
@section('content')

<form action="{{route('posts.update')}}" method="POST">

@csrf

        <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post['title']}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" name="description">{{$post['description']}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Posted By</label>
        <select class="form-control" rows="3" name="postedBy" value="{{$post['Posted_by']}}">
            <option value=""> Ahmed</option>
            <option value=""> Ali</option>
            <option value=""> Mohamed</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Edit">
    </div>
</form>

@endsection
