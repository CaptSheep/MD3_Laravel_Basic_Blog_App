@extends('welcome')
@section('title', 'Danh sách Blog')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<table border="1" class="table">
    <a href="{{route('create')}}" class="btn btn-primary">Create Blog</a>
    <thead class="thead-dark">
    <tr>
        <th style="text-align: center">ID</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center" colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key => $blog)
        <tr>
            <td style="text-align: center">{{$key + 1}}</td>
            <td style="text-align: center">{{$blog->name}}</td>
            <td style="text-align: center"> <a href="{{route('show',$blog->id)}}">Blog Detail</a></td>
            <td style="text-align: center"> <a href="{{route('update',$blog->id)}}">Blog Update</a></td>
            <td style="text-align: center"> <a onclick="return confirm('Are you sure?')" href="{{route('destroy',$blog->id)}}">Delete Blog</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
@endsection
