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
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/estiloRegistro.css'); ?>


</head>

<body class="relative min-h-screen bg-[#F6F6F6]" style="background-image:url(/img/fondo_inicio.svg); background-size: 100%; background-position:center;background-repeat: no-repeat;">
    <?php echo $__env->yieldContent('content'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\SitApp1\resources\views/layout3.blade.php ENDPATH**/ ?>