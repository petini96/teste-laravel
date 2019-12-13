<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id' => 199,
            'name' => 'Vinícius dos Santos Petini',
            'password' => '$2y$10$l7yHpTa2RAK9.9PchosVcO6GEgy2.ygMOuYxnvTzErxKVlqHVxh7y',
            'email' => 'petiniprojetos96@gmail.com',
            'email_verified_at' => null,
            'remember_token' => null,

        ]);
    }
}
