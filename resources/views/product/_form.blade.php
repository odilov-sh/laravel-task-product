<div class="row">
    <div class="col-md-6">
        @csrf
        <x-forms.active-input :model="$product" attribute="title"/>
        <x-forms.active-input :model="$product" attribute="quantity" type="number" min="0"/>
        <x-forms.active-input :model="$product" attribute="price"/>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>

