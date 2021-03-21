@extends('layouts.AdminLayout')

@section('content')
<br>
<br>
<h3 class="text-center">Spider Web Admin Panel</h3>
        <form action="" class="form-image-upload" method="POST" enctype="multipart/form-data">


            {!! csrf_field() !!}


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
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-4">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-4">
                    <strong>Category</strong>
                    <select name="cat" id="cars" class="form-control">
                     <option value="typography">Portrait Typography</option>
                     <option value="pencil">Portrait Pencil Sketch</option>
                     <option value="colorpencil">Portrait Colour Pencil Sketch</option>
                     <option value="cartoon">Cartoon Caricature</option>
                     <option value="canvas">Acrylic Canvas Painting</option>
                    </select>
                </div>
                <div class="col-md-6 text-right">
                    <br />
                    <button type="submit" style="box-shadow: 20px; background-color: white; color: black;" class="btn">Upload</button>
                    <a class="btn "style="background-color: white; color: black;" href="/"> Back to home</a>

                </div>


            </div>


        </form>


        
@endsection
