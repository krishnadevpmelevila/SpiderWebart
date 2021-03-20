<!-- START: header -->
  
<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
  <div class="container">
     
      
      <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>

      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ Request::is('work') ? 'active' : '' }}"><a href="/work">Works</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <ul class="probootstrap-right-nav hidden-xs">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook2"></i></a></li>
          <li><a href="#"><i class="icon-instagram2"></i></a></li>
        </ul>
        <div class="extra-text visible-xs"> 
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5>Address</h5>
          <p>198 West 21th Street, Suite 721 New York NY 10016</p>
          <h5>Connect</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>
  </div>
</header>
<!-- END: header -->