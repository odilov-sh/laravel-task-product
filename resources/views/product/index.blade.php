@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
    @include('partials.alert')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('products.create') }}" class="btn btn-primary mx-1">Add new product</a>
            <div style="float: right">
               Showing: {{ $index }} - {{ $index + $products->perPage() - 1 }} / {{ $products->total() }}
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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('products.destroy', $product) }}" class="btn btn-danger btn-sm delete-link">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $products->links() }}
        </div>
    </div>
@stop

@section('js')

    <script>

        $(document).on('click', 'a.delete-link', function (event) {
            event.preventDefault();
            let delete_message = $(this).attr('data-message') ?? "Are you sure want to delete this item?";
            if (!confirm(delete_message)) {
                return false;
            }
            let delete_form = $('<form action="' + $(this).attr('href') + '" method="POST">' +
                '<input type="hidden" name="_method" value="DELETE">' +
                '<input type="hidden" name="_token" value="{{ csrf_token() }}">' +
                '</form>');
            $('body').append(delete_form);
            delete_form.submit();
        })

    </script>

@stop
