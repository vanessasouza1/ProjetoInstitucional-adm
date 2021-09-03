<?php

use Illuminate\Database\Seeder;
use App\Membro;

class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create([
            'idDepartamento' => '1' ,
            'nome' => 'Mary Diva' ,
            'funcao' => 'Diretor',
            
        ]);

        Membro::create([
            'idDepartamento' => '2' ,
            'nome' => 'Mary Diva' ,
            'funcao' => 'Coordenador',
            
        ]);
        //
    }
}
