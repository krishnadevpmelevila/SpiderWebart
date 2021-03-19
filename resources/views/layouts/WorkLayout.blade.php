<!DOCTYPE html>

<html lang="en">
  <head>
  @include('includes.head')
  <title>@yield('title')</title>
  @yield('css')
  </head>
  <body>

  @include('includes.header')

  @yield('content')
  

  @include('includes.footer')
  
  @include('includes.script')
  @yield('script')
  
  
  </body>
</html>