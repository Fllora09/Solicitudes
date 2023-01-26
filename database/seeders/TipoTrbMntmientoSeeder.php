<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoTrbMntmiento;

class TipoTrbMntmientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $redes1 = new TipoTrbMntmiento;
        $redes1->mantenimientoName ="Asignar direccion IP";
        $redes1->save();

        $redes2 = new TipoTrbMntmiento;
        $redes2->mantenimientoName ="Instalacion de nuevos pts de RED";
        $redes2->save();

        $redes3 = new TipoTrbMntmiento;
        $redes3->mantenimientoName ="Instalacion o sustitucion de router wifi";
        $redes3->save();

        $redes4 = new TipoTrbMntmiento;
        $redes4->mantenimientoName ="Configurar router wifi";
        $redes4->save();

        $redes5 = new TipoTrbMntmiento;
        $redes5->mantenimientoName ="Compartir recursos en RED";
        $redes5->save();
    }
}
