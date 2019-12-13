<?php

use Illuminate\Database\Seeder;

class ComissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comissao')->insert([
            'id' => 111,
            'data' => '01/01/2001',
            'portaria' => 'Portaria Principal',
            'validade' => "06/06/2020",
            'tipo_comissao' => 'Voluntária',
            'arquivo' => 'Public/img/licitacao/lct_1.png',
            'arquivo_atual' => 'Public/img/licitacao/lct_5232.png',
            'created_at' => '01/09/2018 ',
            'updated_at' => '01/10/2018',
        ]);

        DB::table('comissao')->insert([
            'id' => 222,
            'data' => '11/11/2010',
            'portaria' => 'Portaria Secundária',
            'validade' => "11/11/2011",
            'tipo_comissao' => 'Organizacional',
            'arquivo' => 'Public/img/licitacao/lct_122.png',
            'arquivo_atual' => 'Public/img/licitacao/lct_4252.png',
            'created_at' => '11/04/2015 ',
            'updated_at' => '11/12/2016',
        ]);
    }
}
