<?php if(isset($errors) && count($errors) > 0): ?>

    <div class="alert alert-danger">
        <ul class="list-unstyled mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(Session::get('succes', false)): ?>
    <?php $data = Sesion::get('success'); ?>
    <?php if(is_array($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                 <?php echo e($message); ?> 
            </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
    <div class="alert alert-success">
        <i class="fa fa-check"></i>
         <?php echo e($data); ?> 
    </div>
    <?php endif; ?>

<?php endif; ?>

    

<?php /**PATH C:\xampp\htdocs\SitApp1\resources\views/partials/messages.blade.php ENDPATH**/ ?>