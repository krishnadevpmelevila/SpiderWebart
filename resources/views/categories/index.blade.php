@extends('layouts.WorkLayout')
@section('title')
Spider Web Arts And Graphics | Works
@endsection

@section('content')

<div class="container ">

    
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4" >
                
                <a class="lightbox" href="{{route('categories.create')}}">
                    <img src="../img/arccanvaspaint.jpg" alt="Park">
                </a>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a  class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg">
                <img src="../img/cartooncari.jpg" alt="Park">

                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg">
                    <img src="../img/pcolorpencilsketch.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                    <img src="../img/ppencilsketch.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                    <img src="../img/ptypo.jpg" alt="Coast">
                </a>
            </div> 
           
            
            
            

        </div>

    </div>

</div>
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection
@endsection


