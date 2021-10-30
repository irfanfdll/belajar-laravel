<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Nikah ?', 'content'=>'lorem ipsum'],
            ['title'=>'Apakah Nikah Enak ?', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
            ];

        //masukkan data ke database
        DB::table('posts')->insert($post);

    }
}
