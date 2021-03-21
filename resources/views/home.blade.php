@extends('layouts.AdminLayout')
@section('css')

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="../css/work.css?2">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<style type="text/css">

    .gallery {
        display: inline-block;
        margin-top: 20px;
    }

    .close-icon {
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }

    .form-image-upload {
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
</style>
@endsection
@section('content')
<br>
<br>
<h3 class="text-center">Spider Web Admin Panel</h3>
<form action="upload" class="form-image-upload" method="POST" enctype="multipart/form-data">


    @csrf


    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="row">
        <div class="col-md-4">
            <strong style="color: black;">Title:</strong>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col-md-4">
            <strong style="color: black;">Image:</strong>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-md-4">
            <strong style="color: black;">Category</strong>
            <select name="cat" id="cars" class="form-control">
                <option value="Portrait Typography">Portrait Typography</option>
                <option value="Portrait Pencil Sketch">Portrait Pencil Sketch</option>
                <option value="Portrait Colour Pencil Sketch">Portrait Colour Pencil Sketch</option>
                <option value="Cartoon Caricature">Cartoon Caricature</option>
                <option value="Acrylic Canvas Painting">Acrylic Canvas Painting</option>
            </select>
        </div>
        <div class="col-md-6 text-right">
            <br />
            <button type="submit" style="box-shadow: 20px; background-color: white; color: black;" class="btn">Upload</button>
            <a class="btn " style="background-color: white; color: black;" href="/"> Back to home</a>

        </div>


    </div>


</form>
<div class="row">
    <div class='list-group gallery'>



        @foreach($images as $image)
        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
            <a href="../images/{{$image->image}}">
                <figure>
                    <img width="150px" height="150px" class="img-responsive" alt="" src="../images/{{ $image->image }}" />
                </figure>
                <div class='text-center'>
                    <small class='text-muted'>{{ $image->title }}</small>
                </div> <!-- text-center / end -->
            </a>
            <form action="{{ url('edit',$image->id) }}" method="POST">
                <input type="hidden" name="_method" value="delete">
                @csrf
               <button onclick=" return confirm('Are you sure to delete {{$image->title}}?')" type="submit" class="close-icon btn btn-danger"> <i class="glyphicon ">X</i></button>
            </form>
        </div> <!-- col-6 / end -->
        @endforeach



    </div> <!-- list-group / end -->
</div> <!-- row / end -->
</div> <!-- container / end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="../js/work.js?2"></script>

@endsection