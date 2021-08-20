<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colores')->insert(['name' => 'BLANCO',]);
        DB::table('colores')->insert(['name' => 'NEGRO',]);
        DB::table('colores')->insert(['name' => 'B/DORADO',]);
        DB::table('colores')->insert(['name' => 'B/PLATA',]);
        DB::table('colores')->insert(['name' => 'B/ROSA',]);
        DB::table('colores')->insert(['name' => 'B/ROJO',]);
        DB::table('colores')->insert(['name' => 'N/PLATA',]);
        DB::table('colores')->insert(['name' => 'N/DORADO',]);
        DB::table('colores')->insert(['name' => 'N/ROSA',]);
        DB::table('colores')->insert(['name' => 'N/CORAL',]);
        DB::table('colores')->insert(['name' => 'N/BLANCO',]);
        DB::table('colores')->insert(['name' => 'N/AZUL',]);
    }
}
