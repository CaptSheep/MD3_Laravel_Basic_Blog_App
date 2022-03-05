<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <form action="{{route('update',$blogs->id)}}" method="post">
        @csrf
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name" value="{{$blogs->name}}">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blogs->title }}">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{$blogs->content}}">
        </div>
        <div>
            <input type="submit" value="Update Blog" class="btn btn-danger">
        </div>
        <div>
            <a href="{{route('index')}}" class="btn btn-primary">Back</a>
        </div>
    </form>

</div>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
