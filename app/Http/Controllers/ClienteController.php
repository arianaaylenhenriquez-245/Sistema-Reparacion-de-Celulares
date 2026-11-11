<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //

class ClienteController extends Controller
{
    public function index(Request $request)
    {
    $request->validate([
        'buscar' => ['nullable', 'string', 'max:100'],
    ]);
 //$buscar guarda lo que escribis en el buscador
 //trim() elimina espacios al principio y final
    $buscar = trim($request->input('buscar', ''));

    $consulta = Cliente::query();

    //busca coincidencias 
    //orWhere:permite que coincida el nmbre,dni,telf

    if ($buscar !== '') {
        $consulta->where(function ($query) use ($buscar) {
            $query->where('nombre', 'like', '%' . $buscar . '%')
                ->orWhere('dni', 'like', '%' . $buscar . '%')
                ->orWhere('telefono', 'like', '%' . $buscar . '%');
        });
    }

    $clientes = $consulta->orderBy('id', 'desc')->get();

    return view('clientes', [
        'clientes' => $clientes,
        'buscar' => $buscar,
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


public function destroy(Cliente $cliente)
{
    $tieneEquipos = DB::table('equipos')
        ->where('cliente_id', $cliente->id)
        ->exists();

    if ($tieneEquipos) {
        return redirect()
            ->route('clientes')
            ->with('error', 'No se puede eliminar: el cliente tiene equipos asociados.');
    }

    $cliente->delete();

    return redirect()
        ->route('clientes')
        ->with('exito', 'Cliente eliminado correctamente.');
    } //cierre del metodo destroy

}//cierre de la clase Clientecontrolador xd