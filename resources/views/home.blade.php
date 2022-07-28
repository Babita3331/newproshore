<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body style="background-color: #f1f1f1">
<div>
    <h3 style="font-weight: bold;text-align: center;margin-top: 30px">Blog details </h3>
</div>

<div class="container">
    <div>
        <a href="{{route('index')}}" type="button" class="btn btn-danger px-3">Add New Blog</a>
    </div>
<div class="table-responsive">
    <table class="table table-striped table-bordered"  style="margin-top: 20px">
        <thead>
        <tr>
            <th scope="col">sn</th>
            <th scope="col">Blog Author</th>
            <th scope="col">Blog Description</th>
            <th scope="col"> image</th>
            <th scope="col"> Status</th>
        </tr>
        </thead>
        <tbody>
        @if($blog)
            @foreach($blog as $key=>$value)
        <tr style="text-align: center">
            <th scope="row">{{$key+1}}</th>
            <td>{{$value->blog_author}}</td>
            <td>{{ \Str::limit(strip_tags(html_entity_decode($value->description)),10,$ends="...") }}</td>
            <td><img src="{{ asset('upload/blog/'.$value->image) }}" style="width: 100px;height: 50px;object-fit: cover" alt=""></td>

            <td>   <span class="badge badge-success" style="color: #fffff">{{$value->status}}</span></td>
        </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
