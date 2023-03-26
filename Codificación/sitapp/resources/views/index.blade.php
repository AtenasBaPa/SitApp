<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SitApp</title>
    @vite('resources/css/app.css')
</head>

<header>
  <div class="header"><div class="font-josefina text-4xl pr-3">SitApp</div></div>
</header>

<body class="">
    @yield('content')
    <!--PIE DE PAGINA-->
    <footer class="bg-transparent text-black py-5 mt-7 text-right text-xl w-full absolute bottom-0">
        <div class="font-josefina text-4xl pr-3">Informacion</div>
    </footer>
</body>
</html>