@php

    /** @var $label string  */
    /** @var $attributes  Illuminate\View\ComponentAttributeBag  */
    /** @var $errors Illuminate\Support\ViewErrorBag */
    /** @var $model \Illuminate\Database\Eloquent\Model */
    /** @var $attribute string */
    /** @var $errorAttribute string */

    $hasError = $errors->has($errorAttribute);

@endphp

<div class="form-group mb-1">
    <label class="form-label" for="">{{  $label  }}</label>
    <input
        {{  $attributes->class(['form-control', 'is-invalid' => $hasError])  }}
        {{ $attributes->merge(['id' => $attribute, 'name' => $attribute, 'type' => 'text', 'value' => old($errorAttribute, $model->$attribute), 'placeholder' => $label])
        }}>
        @error($errorAttribute) <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>
