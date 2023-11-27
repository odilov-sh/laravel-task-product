@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Add new product</h1>
@stop

@section('content')


    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('products.store') }}" >
                @include('product._form', ['product' => $product])
            </form>
        </div>
    </div>
@stop
