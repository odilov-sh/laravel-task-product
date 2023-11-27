<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Products</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mx-1">Add new product</a>
            <div style="float: right">
               Showing: <?php echo e($index); ?> - <?php echo e($index + $products->perPage() - 1); ?> / <?php echo e($products->total()); ?>

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Quntity</th>
                    <th>Price</th>
                    <th>Total price with VAT</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index++); ?></td>
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->total_price_with_vat); ?></td>
                        <td>
                            <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo e(route('products.destroy', $product)); ?>" class="btn btn-danger btn-sm delete-link">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script>

        $(document).on('click', 'a.delete-link', function (event) {
            event.preventDefault();
            let delete_message = $(this).attr('data-message') ?? "Are you sure want to delete this item?";
            if (!confirm(delete_message)) {
                return false;
            }
            let delete_form = $('<form action="' + $(this).attr('href') + '" method="POST">' +
                '<input type="hidden" name="_method" value="DELETE">' +
                '<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">' +
                '</form>');
            $('body').append(delete_form);
            delete_form.submit();
        })

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\lara-task\resources\views/product/index.blade.php ENDPATH**/ ?>