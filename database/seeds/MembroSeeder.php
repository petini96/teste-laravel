<?php

use Illuminate\Database\Seeder;

class MembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('membro')->insert([
            'id' => 111,
            'nome' => 'Cléia Pires',
            'numero_ato' => '25212',
            'ano_ato' => '1990',
            'data_designacao' => '06/07/2002',
            'cargo' => 'Analista de T.I',
            'tipo_cargo' => 'Provisório',

            // 'id_comissao' => 111,
            'created_at' => '06/07/1990',
            'updated_at' => '06/07/1990',
        ]);

        DB::table('membro')->insert([
            'id' => 222,
            'nome' =>'Joge Matos',
            'numero_ato' => '68023',
            'ano_ato' => '2018',
            'data_designacao' => '24/09/2018',
            'cargo' => 'Supervisor',
            'tipo_cargo' => 'Definitivo',

            // 'id_comissao' => 111,
            'created_at' => '01/09/2018 ',
            'updated_at' => '01/10/2018',
        ]);

        DB::table('membro')->insert([
            'id' => 333,
            'nome' =>'Tayron Silva',
            'numero_ato' => '9538',
            'ano_ato' => '2015',
            'data_designacao' => '04/04/2019',
            'cargo' => 'Gerente',
            'tipo_cargo' => 'Definitivo',

            // 'id_comissao' => 222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro')->insert([
            'id' => 444,
            'nome' =>'Talita Ramos',
            'numero_ato' => '421',
            'ano_ato' => '2018',
            'data_designacao' => '02/02/2019',
            'cargo' => 'Desenvolvedor',
            'tipo_cargo' => 'Definitivo',

            // 'id_comissao' => 222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro')->insert([
            'id' => 555,
            'nome' =>'Tulho Nogueira',
            'numero_ato' => '5552',
            'ano_ato' => '2015',
            'data_designacao' => '01/01/2019',
            'cargo' => 'Auxíliar',
            'tipo_cargo' => 'Definitivo',

            // 'id_comissao' => 222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);
    }
}
