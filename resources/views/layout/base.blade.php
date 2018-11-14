<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>App Name - @yield('title')</title>

    </head>
    <body>
      <header>
        @include('layout.aside')
      </header>
    <main>
            @yield('content')
        </main>


    </body>
    <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
</html>
