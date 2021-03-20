@extends('layouts.WorkLayout')
@section('title')
Spider Web Arts And Graphics | Works
@endsection
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="../css/work.css">
    <link rel="stylesheet" href="../css/styles-merged.css?8">
    <link rel="stylesheet" href="../css/style.min.css?8">
    <link rel="stylesheet" href="../css/custom.css">
    
@endsection
@section('content')

<div style="margin-top: 10%;" class="container">
  <div class="card text-center">
    
    <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
    <ul class="list-group">
    @foreach($errors->all() as $error)
    <li class="list-group-item text-danger">{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif

      <form action="{{route('categories.store')}}" method="POST">
      @csrf
        <div class="form-group row">
          <label for="productName" class="col-sm-3 col-form-label">Category Name</label>
          <div class="col-sm-9">
            <input type="text" name="name" id="productName" class="form-control">
          </div>
        </div>
        <button type="submit" style="color: black;" class="btn btn-primary">Add Category</button>
      </form>
      

    </div>
  </div>

  <ul class="list-group mt-5">

  </ul>

</div>


<table class="table">
  <thead style="color: white;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody style="color: white;">
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
    </tr>
  @endforeach
    
  </tbody>
</table>


@section('script')
<script src="../js/scripts.min.js"></script>
  <script src="../js/main.min.js"></script>
  <script src="../js/custom.js"></script>
@endsection
@endsection




