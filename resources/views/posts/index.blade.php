@extends('layouts.app')
@section('content')
<a type="button" class="btn btn-primary m-5" href="{{route('posts.create')}}">Create Post</a>

<table class="table container">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Posted_by</th>
            <th scope="col">Created_at</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['Posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>
                <a type="button" class="btn btn-secondary" href="{{route('posts.edit', $post['id'])}}">Edit</a>
                <a type="button" class="btn btn-success" href="{{route('posts.show', $post['id'] )}}">Show</a>
                <input type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{$post['id']}}" class="btn btn-danger" value="Delete">
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$post['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$post['id']}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel{{$post['id']}}">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you wanna delete it ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form method="post" action="{{route('posts.delete',$post['id'])}}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        @endforeach
    </tbody>
</table>
@endsection@extends('layouts.app')
@section('content')
<a type="button" class="btn btn-primary m-5" href="{{route('posts.create')}}">Create Post</a>

<table class="table container">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Posted_by</th>
            <th scope="col">Created_at</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['Posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>
                <a type="button" class="btn btn-secondary" href="{{route('posts.edit', $post['id'])}}">Edit</a>
                <a type="button" class="btn btn-success" href="{{route('posts.show', $post['id'] )}}">Show</a>
                <input type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{$post['id']}}" class="btn btn-danger" value="Delete">
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$post['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$post['id']}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel{{$post['id']}}">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you wanna delete it ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form method="post" action="{{route('posts.delete',$post['id'])}}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        @endforeach
    </tbody>
</table>
@endsection
