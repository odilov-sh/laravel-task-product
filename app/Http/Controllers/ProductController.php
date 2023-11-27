<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $products = Product::paginate();
        $index = ( $products->currentPage() - 1) * $products->perPage() + 1;
        return view('product.index', compact('products', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        Product::create($data);
        return to_route('products.index')
            ->with('success', 'New product has been added successfully!');
    }

    /**
     * Show the specified resource.
     * @param Product $product
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param Product $product
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return to_route('products.index', $product)
            ->with('success', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index',)
            ->with('warning', 'Product has been deleted');
    }

}
