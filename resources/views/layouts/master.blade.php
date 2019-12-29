<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @include('components.head')
  </head>
  <body>
    <!-- loader -->
    <div id="wcrlo-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>
    <main class="mainTag">
    @include('components.navbar')

    @yield('content')
    
    @include('components.jsScripts')
    @include('components.footer')
    </main>
  </body>
</html>