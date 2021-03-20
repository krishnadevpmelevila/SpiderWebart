@extends('layouts.app')

@section('content')
<h3 class="text-center">Spider Web Admin Panel</h3>
        <form action="{{ url('edit') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


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
                <div class="col-md-5">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-5">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-6 text-right">
                    <br />
                    <button type="submit" class="btn btn-success">Upload</button>
                    <a class="btn btn-primary" href="/"> Back to home</a>

                </div>


            </div>


        </form>


        
@endsection
