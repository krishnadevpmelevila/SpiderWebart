@extends('layouts.MainLayout')
@section('title')
Spider Web Design And Arts | Home
@endsection

@section('content')
  
  <!-- END: slider  -->
  
  <section class="probootstrap-section">
  <li >
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2 style="font-family: 'Grease', sans-serif;">Spider Web<br>Design And Arts</h2>
                <p><a href="/work" target="_blank" class="btn btn-primary">View Our Works</a></p>
              </div>
            </div>
          </div>
        </div>
      </li>
  <canvas id="web">
    </canvas>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
              <i class="icon-font"></i>
            </div>

            <div class="text">
              <h3 class="heading">Typography</h3>
              <p>Spider Web Design And Arts provides you the most impressive and catchy custom typography works. we use custom fonts and colours to bring you a most beautiful visual experience </p>
              
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-pencil"></i>
            </div>
            <div class="text">
              <h3 class="heading">Pencil Sketch</h3>
              <p>Spider Web Design And Arts provides you a wide range of pencil sketch artworks, We provide both colour pencil sketch and black and white pencil sketch works which will provide a visual treat to your mind</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
            <i class="fas fa-chart-pie"></i>
            </div>
            <div class="text">
              <h3 class="heading">Graphic Designing</h3>
              <p>Spider Web Graphic design works are very unique as compared to other competitors. We provide you with the most customisable package with a fair price </p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
            <i class="far fa-meh-blank"></i>
            </div>
            <div class="text">
              <h3 class="heading">Caricature Works</h3>
              <p>Spider Web Design And Arts provides you with the most awesome looking caricatures, which will be one of the best visual experience in your life  </p>
             
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
            <i class="fas fa-cogs"></i>
            </div>
            <div class="text">
              <h3 class="heading">Mechanical Designing Works</h3>
              <p>We undertake mechanical engineering designing works to bring your hardwares and machines a unique design with modern softwares like Autocad,Catia and Solid Works</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
            <i class="fas fa-heart"></i>
            </div>
            <div class="text">
              <h3 class="heading">Wedding Gift Works</h3>
              <p>Spider Web's wedding gift work is a unique section in art industry, we provide life to each moments in post and pre wedding events by converting each image to a piece of artwork or caricature  </p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
            <i class="fas fa-headset"></i>
            </div>
            <div class="text">
              <h3 class="heading">Advertisment Works</h3>
              <p>Spider Web's custom advertisment graphics and artwork helps your ad to catchy and elegant. It will be always unique form the other type of advertisment as we provides you with the best optimised design for your advertisments</p>
              
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
            <i class="fas fa-print"></i>
            </div>
            <div class="text">
              <h3 class="heading">DTP</h3>
              <p>We do DTP works with full responsiblity without any errors, we also provides custom revisions to the works.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
            <i class="fas fa-plus"></i>
            </div>
            <div class="text">
              <h3 class="heading">Custom Artworks</h3>
              <p>Apart from the above services, Spider Web mainly concentrate on the custom artwork packages , You can see our works on our work page, We are very committed to our customer satisfaction </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

  <!-- END section cta -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading probootstrap-animate">
          <h2>The Projects</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
@section('script')
<script src="/js/spider.js?1512"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
@endsection
@endsection
