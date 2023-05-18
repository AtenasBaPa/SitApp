<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>SitApp</title>
    @vite('resources/css/app.css')
    @vite('resources/css/estiloLogin.css')


</head>

<body class="relative min-h-screen bg-[#F6F6F6]" style="background-image:url(/img/fondo_inicio.svg); background-size: 100%; background-position:center;background-repeat: no-repeat;">
    @yield('content')

</body>

</html>
