<?php $__env->startSection('content'); ?>
<div class="w-3/4 h-screen mx-auto">
    <!-- Clase para el logo  -->
    <div class="w-72 h-60 mx-auto" style="background-image:url(img/Logos/1.svg);background-size: 70%;  background-position:center;background-repeat:no-repeat;"></div>

    <div class="grid grid-cols-4 grid-rows-4 mx-auto login-screen"> <!-- Clase para  la pantalla adentro de login-->
        <div class="col-start-1 col-span-4 text-4xl py-8 row-start-1 app-title"> <!-- Clase para  el titulo que esta adentro del cuadro -->
            <h1>Bienvenido</h1>
        </div>
        <!-- Inicia formulario para inicio de sesión -->
        <form class="col-start-1 col-span-4 row-start-2 row-span-3 w-full" method="POST" action="/login">
    <?php echo csrf_field(); ?>
    <div class="grid grid-cols-4 grid-rows-5 login-form">
        <div class="control-group col-start-1 col-span-4 row-start-1">
            <input type="text" class="input-password pl-6 text-lg font-semibold <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Correo" id="correo" name="correo">
            <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-2">
            <input type="password" class="input-password pl-6 text-lg font-semibold <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Contraseña" id="password" name="password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
<!-- Boton para inicio de sesión -->
        <button class="col-start-1 col-span-4 row-start-3 mx-28 btn btn-large btn-block py-2 bg-[#7EACE9]" type="submit" value="Login">
            Iniciar Sesión
        </button>
<!-- Boton para poder registrar una nueva cuenta -->
        <a class="col-start-1 col-span-4 row-start-4 login-link text-center mx-auto" href="/register">
            <span>¿No tienes una cuenta?</span> <span class="transition-colors duration-500 hover:text-[#1E56A0]"> Registrate</span>
        </a>
<!-- Boton para volver a pagina principal -->
        <a class="col-start-1 col-span-4 row-start-5 w-fit m-auto login-return transition-colors duration-500 hover:text-[#1E56A0]" href="/">
            volver
        </a>
    </div>
</form>
<!-- termina formulario para inicio de sesión -->
    </div>

</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SitApp1\resources\views/auth/login.blade.php ENDPATH**/ ?>