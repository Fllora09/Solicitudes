<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependencia;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Dependencia::factory(20)->create();

        $this ->call(UserSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(SolucionSoliSeeder::class);
        $this->call(TipoTrbMntmientoSeeder::class);
        $this->call(RolesSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
