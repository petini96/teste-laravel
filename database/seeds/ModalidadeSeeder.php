<?php

use Illuminate\Database\Seeder;

class ModalidadeSeeder extends Seeder
{

    public function run()
    {
        //
        DB::table('modalidade')->insert([
            'descricao' => 'Concorrência Pública',
        ]);

        DB::table('modalidade')->insert([
            'descricao' => 'Pregão',
        ]);

        DB::table('modalidade')->insert([
            'descricao' => 'Convite',
        ]);

        DB::table('modalidade')->insert([
            'descricao' => 'Tomada de preços',
        ]);

    }
}
