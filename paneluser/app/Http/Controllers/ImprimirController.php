<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Cliente;
use Barryvdh\DomPDF\PDF;
use App\Models\Direccion;
use App\Models\Formulario;
use App\Models\Transporte;
use Illuminate\Http\Request;

class ImprimirController extends Controller
{
    public function imprimir()
    {

        $pdf = \PDF::loadView('checkout');
        return $pdf->download('imprimir.pdf');
    }
}
