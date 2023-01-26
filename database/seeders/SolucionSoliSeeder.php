<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SolucionSoli;

class SolucionSoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $solucionsoli1 = new SolucionSoli;
      $solucionsoli1->soluSolitd ="Verificar";
      $solucionsoli1->save();

      $solucionsoli2 = new SolucionSoli;
      $solucionsoli2->soluSolitd ="Retiro";
      $solucionsoli2->save();

      $solucionsoli3 = new SolucionSoli;
      $solucionsoli3->soluSolitd ="Reparacion";
      $solucionsoli3->save();

      $solucionsoli4 = new SolucionSoli;
      $solucionsoli4->soluSolitd ="Instalacion";
      $solucionsoli4->save();

      $solucionsoli5 = new SolucionSoli;
      $solucionsoli5->soluSolitd ="Configuracion";
      $solucionsoli5->save();
    }
}
