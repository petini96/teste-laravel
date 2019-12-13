<?php

use Illuminate\Database\Seeder;

class MembroComissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('membro_comissao')->insert([
            'id_membro' => 111,
            'id_comissao' =>111,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro_comissao')->insert([
            'id_membro' => 111,
            'id_comissao' =>222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro_comissao')->insert([
            'id_membro' => 222,
            'id_comissao' =>222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro_comissao')->insert([
            'id_membro' => 333,
            'id_comissao' =>222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro_comissao')->insert([
            'id_membro' => 444,
            'id_comissao' =>222,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

        DB::table('membro_comissao')->insert([
            'id_membro' => 555,
            'id_comissao' =>111,
            'created_at' => '01/09/2019 ',
            'updated_at' => '01/10/2020',
        ]);

    }
}
