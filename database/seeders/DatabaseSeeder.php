<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Giovanni Genuino',
                'email' => 'giovanni@example.com',
                'password' => Hash::make('password1'),
            ],
            [
                'name' => 'User Test',
                'email' => 'userTest@example.com',
                'password' => Hash::make('password2'),
            ],
        ]);

        DB::table('landing_data')->insert([
            'title' => 'First Edition',
            'subtitle' => 'First Edition Subtitle',
            'files_id' => 1,
            'insertDate' => new Datetime()
        ]);

        DB::table('files')->insert([
            'filename' => 'FirstFile',
            'imageType' => 1,
            'base64' => base64_encode('imagemtesteconteudo')
        ]);
    }
}


?>