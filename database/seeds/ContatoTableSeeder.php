<?php

use Illuminate\Database\Seeder;
use App\Contato;

class ContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::create([
            'nome' => 'Vanessa',
            'email' => 'vanessasouzaoliveira1@gmail.com',
            'mensagem' => 'Mensagem de teste.'
	       
        ]);
    }
}
