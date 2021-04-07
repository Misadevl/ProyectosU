<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePanel;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImprimirController;

class PanelController extends Controller
{
    public function index()
    {


        $datos = Product::all();


        return view('paneles.index', compact('datos'));
    }
    public function create()
    {
        return view('paneles.create');
    }
    public function store(StorePanel $request)
    {
        // $dato->save();
        // $dato = new Producto();

        // $dato->nombre = $request->nombre;
        // $dato->precio = $request->precio;
        // $dato->valor = $request->valor;
        // $dato->categoria = $request->categoria;
        // $dato->cantidad = $request->cantidad;
        // $dato->peso = $request->peso;


        $dato = new Product();

        $dato->nombre = $request->nombre;
        $dato->descripcion = $request->descripcion;
        $dato->precio = $request->precio;
        // $dato->urlfoto = $request->urlfoto;

        // if ($request->hasFile('urlfoto')) {
        //     $dato['urlfoto'] = $request->file('urlfoto')->store('uploads', 'public');
        // }




        $dato->save();

        // $dato = Product::create($request->all());
        return redirect()->route('paneles.show', $dato);
    }
    public function show(Product $dato)
    {

        return view('paneles.show', compact('dato'));
    }

    public function edit(Product $dato)
    {
        return view('paneles.edit', compact('dato'));
    }
    public function update(StorePanel $request, Product $dato)
    {

        // $request->validate([
        //     'nombre'=>'required',
        //     'precio'=>'required',
        //     'categoria'=>'required',
        //     'cantidad'=>'required'
        // ]);

        // $curso->nombre = $request->nombre;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        // $dato->save();
        $dato->update($request->all());
        return view('paneles.show', compact('dato'));
    }

    public function destroy(Product $dato)
    {


        $dato->delete();
        return redirect()->route('paneles.index');
    }
}
