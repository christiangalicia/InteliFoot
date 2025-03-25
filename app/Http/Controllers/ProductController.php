<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderby('id', 'desc')->get();
        return view('admin.product.index', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $categories= Catalog::where("estado",1)->orderby('id','desc')->get();
        return view('admin.product.create',["categories"=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'foto' => 'required|max:2040|extensions:jpg,png',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'category' => 'required|numeric|exists:catalogs,id',
            'talla' => 'required|string',
            'destacado' => 'required|boolean',

        ]);

        $product = new Product();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/product'), $filename);
            $product->foto = url('assets/product') . '/' . $filename;
        }

        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->catalog_id = $request->category;
        $product->tallas = $request->talla;
        $product->destacado = $request->destacado;
        $product->save();
        return redirect()->route('productIndex')->with('status', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories= Catalog::where("estado",1)->orderby('id','desc')->get();
        return view('admin.product.edit', ['product' => $product,"categories"=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'foto' => 'max:2040|extensions:jpg,png',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'category' => 'required|numeric|exists:catalogs,id',
            'talla' => 'required|string',
            'destacado' => 'required|boolean',

        ]);
        $product = Product::find($id);
        if ($request->hasFile('foto')) {
            if ($product->foto) {
                $oldFilePath = public_path('assets/product') . '/' . basename($product->foto);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/product'), $filename);
            $product->foto = url('assets/product') . '/' . $filename;
        }
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->catalog_id = $request->category;
        $product->tallas = $request->talla;
        $product->destacado = $request->destacado;
        $product->save();
        return redirect()->route('productIndex')->with('status', 'Producto actualizado con éxito');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product->foto) {
            $oldFilePath = public_path('assets/product') . '/' . basename($product->foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        $product->delete();
        return redirect()->route('productIndex')->with('status', 'Producto eliminado con éxito');
    }
}
