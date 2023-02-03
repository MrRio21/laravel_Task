@extends('layouts.app')
@section('content')

<<<<<<< HEAD
<div class="card container">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
=======
<body>
<div>
 <div class="card-body">
>>>>>>> e6bd5908280788d7e918ed7062c431285d9aeb0e
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
<<<<<<< HEAD
    <p class="card-text"> <h3>Email:</h3>{{$post['email']}}</p>
  </div>
</div>

@endsection
=======
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



>>>>>>> e6bd5908280788d7e918ed7062c431285d9aeb0e
