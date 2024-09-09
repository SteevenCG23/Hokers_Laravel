<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use DragonCode\Contracts\Cashier\Auth\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function productsList()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function admincreateproduct()
    {
        $products = Product::all();
        return view('admin.products.create', compact('products'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $product->image = file_get_contents($image->getRealPath());
        }

        //Save the id of the authenticated seller
        /* $product->sellerId = Auth::id();  */

        $product->save();
        return redirect()->back()->with('mensaje_create','');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $product->image = file_get_contents($image->getRealPath());
        }

        $product->save();
        return redirect()->back()->with('mensaje_edit','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->status = 'inactivo';

        $product->save();
        return redirect()->back()->with('mensaje_delete','');
    }

    /**
     * Display the seller's page.
     */
    public function pg_vendedor()
    {
        return view('products.pg_vendedor');
    }

    /**
     * Redirect to index page.
     */
    public function vista_pg()
    {
        return redirect('/index');
    }

    /**
     * Redirect to seller's page.
     */
    public function vista_dn()
    {
        return redirect('pg_vendedor');
    }

    /**
     * Display the profile page.
     */
    public function perfil()
    {
        $products = Product::all();
        return view('products.perfil',compact('products'));
    }


    public function pg_cliente()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

}
