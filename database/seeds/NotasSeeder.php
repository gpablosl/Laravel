<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'titulo' => 'Mi primera nota',
            'contenido' => 'contenido contenido contenido'
        ]);
        DB::table('notas')->insert([
            'titulo' => 'Instalar Laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);
    }
}
