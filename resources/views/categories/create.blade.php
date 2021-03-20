@extends('layouts.WorkLayout')
@section('css')

@endsection
@section('content')

<div style="margin-top: 10%;" class="container">
  <div class="card text-center">
    
    <div class="card-body">
      <form action="{{route('categories.store')}}" method="POST">
      @csrf
        <div class="form-group row">
          <label for="productName" class="col-sm-3 col-form-label">Category Name</label>
          <div class="col-sm-9">
            <input type="text" name="product" id="productName" class="form-control" id="productName">
          </div>
        </div>
      </form>
      <a href="{{route('categories.create')}}" style="color: black;" class="btn btn-primary float-right add-product">Add Category</a>

    </div>
  </div>

  <ul class="list-group mt-5">

  </ul>

</div>


@endsection