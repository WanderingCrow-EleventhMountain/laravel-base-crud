<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BananaJoe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      @include('header')
      <div class="porycontainer">
        @yield('pory')
      </div>
      @include('footer')
      <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
