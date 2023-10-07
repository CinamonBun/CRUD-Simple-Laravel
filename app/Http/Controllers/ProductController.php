<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'unit' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'unit' => 'required',
        ]);

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('index')->with('success', 'Produk berhasil dihapus');
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();

        return redirect()->route('index')->with('success', 'Produk berhasil dihapus!');
    }
}
