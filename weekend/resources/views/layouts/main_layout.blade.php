<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rospetti</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class='header'>
      @include('components.header')
    </div>
    <main>
      @yield('content')
    </main>
    <div class='footer'>
      @include('components.footer')
    </div>

    <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
