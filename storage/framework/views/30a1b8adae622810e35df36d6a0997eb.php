<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="alert-body">
            <?php echo e(session()->get('success')); ?>

        </div>
    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="alert-body">
            <?php echo e(session()->get('error')); ?>

        </div>
    </div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="alert-body">
            <?php echo e(session()->get('warning')); ?>

        </div>
    </div>
<?php endif; ?>

<?php if(session()->has('info')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <div class="alert-body">
            <?php echo e(session()->get('info')); ?>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH W:\domains\lara-task\resources\views/partials/alert.blade.php ENDPATH**/ ?>