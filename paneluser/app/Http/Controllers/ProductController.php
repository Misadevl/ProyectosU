<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormulario;
use App\Models\Formulario;
use App\Models\Direccion;
use App\Models\Pago;
use App\Models\Transporte;
use App\Models\Cliente;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->telefono = $request->telefono;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
        return redirect('contactanos');
    }

    public function contactos()
    {
        return view('contacto');
    }
    public function agre(StoreFormulario $request)
    {
        $formulario = new Formulario();
        $direccion = new Direccion();
        $transporte = new Transporte();
        $pago = new Pago();
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->dni = $request->dni;
        $direccion->lugar = $request->lugar;
        $direccion->pais = $request->pais;
        $direccion->ciudad = $request->ciudad;
        $direccion->direccion = $request->direccion;
        $direccion->codigo = $request->codigo;
        $transporte->tipo = $request->tipo;
        $transporte->aerolinea = $request->aerolinea;
        $transporte->terrestre = $request->terrestre;
        $pago->producto = $request->producto;
        $pago->kg = $request->kg;
        $pago->tonelada = $request->tonelada;
        $pago->total1 = $request->total1;
        $pago->total2 = $request->total2;
        $pago->tipopago = $request->tipopago;
        $pago->cuenta = $request->cuenta;


        $formulario->nombre = $request->nombre;
        $formulario->apellido = $request->apellido;
        $formulario->email = $request->email;
        $formulario->telefono = $request->telefono;
        $formulario->dni = $request->dni;
        $formulario->lugar = $request->lugar;
        $formulario->pais = $request->pais;
        $formulario->ciudad = $request->ciudad;
        $formulario->direccion = $request->direccion;
        $formulario->codigo = $request->codigo;
        $formulario->tipo = $request->tipo;
        $formulario->aerolinea = $request->aerolinea;
        $formulario->terrestre = $request->terrestre;
        $formulario->producto = $request->producto;
        $formulario->kg = $request->kg;
        $formulario->tonelada = $request->tonelada;
        $formulario->total1 = $request->total1;
        $formulario->total2 = $request->total2;
        $formulario->tipopago = $request->tipopago;
        $formulario->cuenta = $request->cuenta;


        $formulario->save();
        $direccion->save();
        $transporte->save();
        $pago->save();
        $cliente->save();
        return redirect('solicitacion');
        // return redirect()->route('cliente.create', $formulario);
        // return view('cliente.create', compact('cliente.create'));
    }
    public function soli()
    {
        return view('cliente.create');
    }

    public function items()
    {
        return view('items');
    }
}
