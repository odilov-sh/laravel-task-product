<?php

    /** @var $label string  */
    /** @var $attributes  Illuminate\View\ComponentAttributeBag  */
    /** @var $errors Illuminate\Support\ViewErrorBag */
    /** @var $model \Illuminate\Database\Eloquent\Model */
    /** @var $attribute string */
    /** @var $errorAttribute string */

    $hasError = $errors->has($errorAttribute);

?>

<div class="form-group mb-1">
    <label class="form-label" for=""><?php echo e($label); ?></label>
    <input
        <?php echo e($attributes->class(['form-control', 'is-invalid' => $hasError])); ?>

        <?php echo e($attributes->merge(['id' => $attribute, 'name' => $attribute, 'type' => 'text', 'value' => old($errorAttribute, $model->$attribute), 'placeholder' => $label])); ?>>
        <?php $__errorArgs = [$errorAttribute];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback" style="display:block;"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH W:\domains\lara-task\resources\views/components/forms/active-input.blade.php ENDPATH**/ ?>