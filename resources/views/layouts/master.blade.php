<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    @include('layouts.backend.partials.css')
  </head>
  <body class="antialiased">
    <div class="wrapper">
    @include('layouts.backend.partials.navbar')

      <div class="page-wrapper">

        @include('layouts.backend.partials.header')

        @yield('content')

        @include('layouts.backend.partials.footer')
      </div>
    </div>
    
    @include('layouts.backend.partials.script')
  </body>
</html>