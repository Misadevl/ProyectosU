<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFormulario;
use App\Models\Formulario;
use App\Models\Direccion;
use App\Models\Pago;
use App\Models\Transporte;
use App\Models\Cliente;

class FormularioController extends Controller
{
    public function index()
    {


        $formularios = Formulario::all();


        return view('formularios.index', compact('formularios'));
    }
    public function create()
    {
        return view('formularios.create');
    }
    public function store(StoreFormulario $request)
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


        //$curso = Curso::create($request->all());

        return redirect()->route('formularios.show', $formulario);
    }
    public function show(Formulario $formulario)
    {

        return view('formularios.show', compact('formulario'));
    }


    public function edit(Formulario $formulario)
    {
        return view('formularios.edit', compact('formulario'));
    }
    public function update(StoreFormulario $request, Formulario $formulario, Cliente $cliente, Direccion $direccion, Transporte $transporte, Pago $pago)
    {

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

        //$curso->update($request->all());
        return view('formularios.show', compact('formulario'));
    }

    public function destroy(Formulario $formulario, Direccion $direccion, Transporte $transporte, Pago $pago, Cliente $cliente)
    {
        $formulario->delete();
        $direccion->delete();
        $transporte->delete();
        $pago->delete();
        $cliente->delete();

        return redirect()->route('formularios.index');
    }
}
