<!DOCTYPE html>

<html lang="en">
  <head>
      <title>@yield('title')</title>
  @include('includes.head')
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