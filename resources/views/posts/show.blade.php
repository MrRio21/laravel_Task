<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>

<body>
<div>
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
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

