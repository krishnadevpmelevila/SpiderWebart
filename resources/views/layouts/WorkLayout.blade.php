<!DOCTYPE html>

<html lang="en">
  <head>
  @include('includes.head')
  <title>@yield('title')</title>
  @yield('css')
  </head>
  <body>
 
  @include('includes.header')
  <div class="container">
  @if(session()->has('success'))
  <div class="alert alert-success">
  {{session()->get('success')}}
  </div>
  @endif
  </div>
 
  @yield('content')
  

  @include('includes.footer')
  
  @include('includes.script')
  @yield('script')
  
  
  </body>
</html>