<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suscripcion;

class SuscripcionSeeder extends Seeder
{
    public function run(): void
    {
        Suscripcion::create([
            'plan' => 'Plan Bronce',
            'costo_mensual' => 25.00,
            'maximo_dias' => 30,
            'vencimiento' => '2026-03-04'
        ]);

        Suscripcion::create([
            'plan' => 'Plan Plata',
            'costo_mensual' => 45.00,
            'maximo_dias' => 90,
            'vencimiento' => '2026-05-04'
        ]);

        Suscripcion::create([
            'plan' => 'Plan Oro',
            'costo_mensual' => 80.00,
            'maximo_dias' => 180,
            'vencimiento' => '2026-08-04'
        ]);
    }
}