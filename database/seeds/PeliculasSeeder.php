
<?php
use Illuminate\Database\Seeder;
use App\Pelicula;
class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelicula::create([
       /*     'Titulo'=>'Aveneger',
            'fecha'=>'12-12-2012',
            'genero'=>'accion',
            'Descripcion'=>'Pelicula basada en los comics',
            'idioma'=>'español',
            'director'=>'desconocido',
            'weboficial'=>'www.avenger.com',
            'actores'=>'todos',*/
            
        ]);
    }
}