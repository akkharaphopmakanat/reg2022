<html>
    <head>
        <title>App Name - @yield('title')</title>
        @section('stylesheets')
            <link rel="stylesheet" type="text/css" href="style.css"> <!-- this is master stylesheet -->
        @show
    </head>
    <body>
        @include('client.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>