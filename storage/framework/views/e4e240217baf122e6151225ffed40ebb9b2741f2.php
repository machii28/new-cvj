<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Welcome to <?php echo e($foo); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>