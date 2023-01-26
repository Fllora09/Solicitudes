<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statuses;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $statuses1 = new Statuses;
      $statuses1->statusName ="Pendiente";
      $statuses1->save();

      $statuses2 = new Statuses;
      $statuses2->statusName ="Atendida";
      $statuses2->save();
    }
}
