<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Simple Blog!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
            <div class="card d-flex mx-auto my-5">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 c1 p-5">
                        <div class="row mb-5 m-3"> <img src="{{asset('image/image1.jpg')}}" width="70vw" height="55vh" alt=""> </div> <img src="{{asset('image/image2.jpg')}}" width="120vw" height="210vh" class="mx-auto d-flex" alt="Teacher">
                        <div class="row justify-content-center">
                            <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                <h1 class="wlcm">Welcome to our blog section</h1> <span class="sp1"> <span class="px-3 bg-danger rounded-pill"></span> <span class="ml-2 px-1 rounded-circle"></span> <span class="ml-2 px-1 rounded-circle"></span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                        <div class="row">
                            <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5"> <a class="nav-link" href="#">About</a> <a class="nav-link ac" href="#">Blog</a> <a class="nav-link" href="#">Contact</a> </nav>
                        </div>
                        <form class="row g-3" method="POST" action="{{route('store.blog')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label @error('blog_title') is-invalid @enderror" id="blog_title">Blog Title</label>
                                <input type="text" class="form-control" id="inputFirstName" name="blog_title" value="{{old('blog_title')}}" placeholder="Enter Blog Title">
                                @error('blog_title')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label @error('blog_author') is-invalid @enderror" id="blog_author">Blog Author </label>
                                <input type="text" class="form-control" id="inputFirstName" name="blog_author" value="{{old('blog_author')}}" placeholder="Enter Author Name">
                                @error('blog_author')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label @error('description') is-invalid @enderror" id="description">Description </label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="summary-ckeditor" name="description" cols="30" rows="10">
                                            {{ old('description') }}
                                        </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label for="inputFirstName" class="form-label  @error('image') is-invalid @enderror">Blog Image</label>
                                <input type="file" class="form-control " id="image" name="image"
                                       accept="image/*">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="col-md-4" id="display_original_image">
                                <img src="" class="img-thumbnail" id="img_prv" alt="">
                            </div>


                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option  value="" selected disabled>--Select Blog  Status --</option>
                                    <option value="active" @if (old('status') == 'active') selected="selected" @endif>Publish</option>
                                    <option value="inactive" @if (old('status') == 'inactive') selected="selected" @endif>Un-Publish</option>

                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">Add</button>
                                {{--                                <span style="float: right"><a href="" type="button" class="btn btn-danger px-3">Cancel</a></span>--}}

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
</html>
