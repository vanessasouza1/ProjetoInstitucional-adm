<?php

use Illuminate\Database\Seeder;
use App\Evento;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'data' => '05/09/2018',
            'nome' => 'Evento Beneficente 1',
            'local' => 'Apae',
	        'horario' => '18:00:00'
	       
        ]);
        
        Evento::create([
            'data' => '05/08/2018',
            'nome' => 'Evento Beneficente 2',
            'local' => 'Apae',
	        'horario' => '17:00:00'
	        
        ]);
        
        Evento::create([
            'data' => '05/11/2018',
            'nome' => 'Evento Beneficente 3',
            'local' => 'Apae',
	        'horario' => '15:00:00'
	        
	    ]);
        //
    }
}
