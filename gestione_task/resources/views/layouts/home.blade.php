<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
    <title>Employee and tasks</title>
  </head>

  <body>
    <div class="header">
      @include('components.header')
    </div>

    <div class="main">
      @yield('content')
    </div>

    <div class=footer>
      @include('components.footer')
    </div>
  </body>
</html>
