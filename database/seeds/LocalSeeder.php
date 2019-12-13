<?php

use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('local')->insert([
            'id_local' => 0,
            'logradouro' => 'Não informado',
            'numero' => 224,
            'complemento' => '',
            'bairro' => 'Não informado',
        ]);

        DB::table('local')->insert([
            'id_local' => 2,
            'logradouro' => 'Orlando Marques de Martins',
            'numero' => 200,
            'complemento' => '',
            'bairro' => 'Flamengo',
        ]);

        DB::table('local')->insert([
            'id_local' => 1,
            'logradouro' => 'Jerônymo Marques Monteiro',
            'numero' => 250,
            'complemento' => '',
            'bairro' => 'Centro',
        ]);

        DB::table('local')->insert([
            'id_local' => 4,
            'logradouro' => 'Armando Silva Araujo',
            'numero' => 300,
            'complemento' => 'Prédio 2',
            'bairro' => 'Flamengo',
        ]);
        DB::table('local')->insert([
            'id_local' => 3,
            'logradouro' => 'Walter de Carvalho',
            'numero' => 150,
            'complemento' => 'Prédio 1',
            'bairro' => 'Flamengo',
        ]);
        DB::table('local')->insert([
            'id_local' => 2071,
            'logradouro' => 'Alvares de Castro',
            'numero' => 346,
            'complemento' => '3º Andar',
            'bairro' => 'Centro',
        ]);
        DB::table('local')->insert([
            'id_local' => 2303,
            'logradouro' => 'Pedro Afonso Ferreira',
            'numero' => 46,
            'complemento' => 'Instituto Municipal',
            'bairro' => 'Centro',
        ]);
        DB::table('local')->insert([
            'id_local' => 2987,
            'logradouro' => 'Raul Alfredo de Andrade',
            'numero' => 224,
            'complemento' => 'Sala CPL - Comissão',
            'bairro' => 'Caxito',
        ]);
    }
}
