<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();

        return view('clientes', [
            'clientes' => $clientes,
        ]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'dni' => ['required', 'string', 'max:20', 'unique:clientes,dni'],
            'telefono' => ['required', 'string', 'max:30'],
        ], [
            'nombre.required' => 'Ingresá el nombre del cliente.',
            'dni.required' => 'Ingresá el DNI del cliente.',
            'dni.unique' => 'Ya existe un cliente con ese DNI.',
            'telefono.required' => 'Ingresá un teléfono de contacto.',
        ]);

        Cliente::create($datos);

        return redirect()
            ->route('clientes')
            ->with('exito', 'Cliente registrado correctamente.');
    }
}