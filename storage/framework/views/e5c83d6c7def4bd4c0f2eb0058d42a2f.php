<div class="row">
    <div class="col-md-6">
        <?php echo csrf_field(); ?>
        <?php if (isset($component)) { $__componentOriginald820792bf994ed001917e442e8d305e3 = $component; } ?>
<?php $component = App\View\Components\Forms\ActiveInput::resolve(['model' => $product,'attribute' => 'title'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.active-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ActiveInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald820792bf994ed001917e442e8d305e3)): ?>
<?php $component = $__componentOriginald820792bf994ed001917e442e8d305e3; ?>
<?php unset($__componentOriginald820792bf994ed001917e442e8d305e3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald820792bf994ed001917e442e8d305e3 = $component; } ?>
<?php $component = App\View\Components\Forms\ActiveInput::resolve(['model' => $product,'attribute' => 'quantity'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.active-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ActiveInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','min' => '0']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald820792bf994ed001917e442e8d305e3)): ?>
<?php $component = $__componentOriginald820792bf994ed001917e442e8d305e3; ?>
<?php unset($__componentOriginald820792bf994ed001917e442e8d305e3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald820792bf994ed001917e442e8d305e3 = $component; } ?>
<?php $component = App\View\Components\Forms\ActiveInput::resolve(['model' => $product,'attribute' => 'price'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.active-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ActiveInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald820792bf994ed001917e442e8d305e3)): ?>
<?php $component = $__componentOriginald820792bf994ed001917e442e8d305e3; ?>
<?php unset($__componentOriginald820792bf994ed001917e442e8d305e3); ?>
<?php endif; ?>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>

<?php /**PATH W:\domains\lara-task\resources\views/product/_form.blade.php ENDPATH**/ ?>