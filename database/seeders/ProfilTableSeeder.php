<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profil = new Profil;
        $profil->nama ="M Faridz Dwi Putra";
        $profil->jurusan ="Informatic Enginering";
        $profil->gambar ="1634183434 - IMG_20211013_115209.jpg";
        $profil->bio ="Saya adalah mahasiswa universitas negeri surabaya prodi manejemen informatika dan sedang menempuh semester 5";
        $profil->tentang ="Saya mahasiswa universitas negeri surabaya prodi manajemen informatika yang saat ini menempuh semster 5. di informatika akan diajarkan tentang bahasa pemrograman mulai dari bahasa C C++ maupun python serta akan diajarkan cara membuat web dengan html css PHP ataupun berbasis framewrok dan saat ini saya mendalami membuat web dengan menggunakan framewrok laravel. Saya saat ini juga masih aktif dalam organisasi";
        $profil->github ="https://github.com/farid1414";
        $profil->ln="https://www.linkedin.com/in/farid-putra-7157771a9";
        $profil->fb ="https://www.facebook.com/";
        $profil->save();
    }
}