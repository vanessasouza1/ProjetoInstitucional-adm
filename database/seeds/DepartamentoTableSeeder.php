<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
	        'nome' => 'Diretoria Administrativa',
        ]);
        
        Departamento::create([
	        'nome' => 'Coordenação',
        ]);
        
        Departamento::create([
	        'nome' => 'Equipe Técnica',
        ]);
        
        Departamento::create([
	        'nome' => 'Administração e Auxiliares',
	    ]);
        
    }
}
