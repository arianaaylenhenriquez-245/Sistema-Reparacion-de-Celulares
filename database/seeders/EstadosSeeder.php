<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    public function run(): void
    {
        $estadosReparacion = [
            'Recibido',
            'Diagnóstico',
            'Esperando aprobación',
            'Esperando repuesto',
            'En reparación',
            'Finalizado',
            'Entregado',
        ];

        /*El foreach nos permite recorrer cad lista y buscar si el estado existe
         y si no existe lo guarda. asi se evita repetir los estados al ejecutar nuevamente el seeder*/ 
        foreach ($estadosReparacion as $nombre) {
            $existe = DB::table('estados_reparaciones')
                ->where('nombre', $nombre)
                ->exists();

            if (!$existe) {
                DB::table('estados_reparaciones')->insert([
                    'nombre' => $nombre,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $estadosPresupuesto = [
            'Pendiente',
            'Aprobado',
            'Rechazado',
        ];

        foreach ($estadosPresupuesto as $nombre) {
            $existe = DB::table('estados_presupuesto')
                ->where('nombre', $nombre)
                ->exists();

            if (!$existe) {
                DB::table('estados_presupuesto')->insert([
                    'nombre' => $nombre,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}