<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post =[
            [
                'name'=>"web",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name'=>"artikel",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name'=>"tips & trik",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        \DB::table('kategoris')->insert($post);
    }
}