<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <div class="">
      @include('components.header')
    </div>
    @yield('content')
    <div class="">
      @include('components.footer')
    </div>
  </body>
</html>
