<html>
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <head>
        <title>
        {{ Request::is('/') ? 'หน้าหลัก' : '' }}
        {{ Request::is('register') ? 'ลงทะเบียน' : '' }}
        {{ Request::is('myinfo') ? 'ข้อมูลของฉัน' : '' }}
        </title>
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