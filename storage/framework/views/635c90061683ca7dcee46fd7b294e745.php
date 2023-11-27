<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Add new product</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?php echo e(route('products.store')); ?>" >
                <?php echo $__env->make('product._form', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\lara-task\resources\views/product/create.blade.php ENDPATH**/ ?>