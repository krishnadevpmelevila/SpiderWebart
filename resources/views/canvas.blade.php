@extends('layouts.WorkLayout')
@section('css')
<link rel="stylesheet" href="../css/work.css?2">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@endsection
@section('content')

<section class="container">

	<div class="row gallery">
	@if(str_contains(url()->current(), 'canvas/Portrait%20Typography'))
      <h1 style="text-align: center; text-decoration: underline;">Portrait Typography</h1>
	@elseif(str_contains(url()->current(), 'canvas/Portrait%20Pencil%20Sketch'))
	<h1 style="text-align: center; text-decoration: underline;">Portrait Pencil Sketch</h1>
	@elseif(str_contains(url()->current(), 'canvas/Acrylic%20Canvas%20Painting'))
	<h1 style="text-align: center; text-decoration: underline;">Acrylic Canvas Painting</h1>
	@elseif(str_contains(url()->current(), 'canvas/Portrait%20Colour%20Pencil%20Sketch'))
	<h1 style="text-align: center; text-decoration: underline;">Portrait Colour Pencil Sketch</h1>
	@elseif(str_contains(url()->current(), 'canvas/Cartoon%20Caricature'))
	<h1 style="text-align: center; text-decoration: underline;">Cartoon Caricature</h1>
@endif
		@foreach($new as $img)
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="../images/{{$img->image}}">
				<figure><img class="img-fluid img-thumbnail" src="../images/{{$img->image}}" alt="Random Image"></figure>
				<p>{{$img->title}}</p>
			</a>
			
		</div>
		@endforeach

		

		
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="../js/work.js?2"></script>
@endsection