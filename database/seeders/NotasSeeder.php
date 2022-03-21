<?php

namespace Database\Seeders;
use App\Notas;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo' => 'Mi primera primera nota',
            'contenido' => 'Contenido de prueba',
            
        ]);

        Notas::create([
            'titulo' => 'Mi primera nota',
            'contenido' => 'Contenido de prueba',
            
        ]);

        Notas::create([
            'titulo' => 'Instalación de laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);

        Notas::create([
            'titulo' => 'Rutas y JSON',
            'contenido' => File::get(__DIR__.'/notas/routes-json.html'),
        ]);

        Notas::create([
            'titulo' => 'Front Controler',
            'contenido' => '<p>Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.</p>'
        ]);

        Notas::create([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => File::get(__DIR__.'/notas/route-parameter-constrains.html'),
        ]);
    }
}
