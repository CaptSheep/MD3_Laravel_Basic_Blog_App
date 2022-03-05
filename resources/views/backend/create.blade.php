<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div>
            <input type="submit" value="Create Blog" class="btn btn-success">
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
