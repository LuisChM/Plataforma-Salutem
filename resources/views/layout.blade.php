<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <title>@yield('title','Salutem')</title>
</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            {{-- @include('partial.nav') --}}
        </header>

        <main class="py-4">
            @yield('content')

        </main>

        <footer class="pt-5 mb-3">
            <div class="container-fluid text-center">

                <p>SALUTEM | 2239-3205 | CONTACTO@SALUTEMCR.COM | WHATSAPP: 7206-7265</p>
                <a href="#"><img class="logoRedSocial mr-5" src="/img/facebook.svg" alt="facebook"></a>
                <a href="#"><img class="logoRedSocial" src="/img/instagram.svg" alt="instagram"></a>

            </div>
        </footer>

    </div>
</body>

<script src="/js/app.js"></script>

</html>