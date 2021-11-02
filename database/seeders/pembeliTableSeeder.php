<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'iit', 'jk' => 'Perempuan', 'alamat' => 'Ciguriang', 'Kode_pos' => 202, 'kota' => 'Bandung', 'tgl_lahir' => '2004-04-04'],
            ['nama' => 'Dadan', 'jk' => 'Laki Laki', 'alamat' => 'Cigirang hilir', 'Kode_pos' => 203, 'kota' => 'Bandung', 'tgl_lahir' => '2004-05-04'],
            ['nama' => 'Gobang', 'jk' => 'Laki Laki', 'alamat' => 'Cibedug', 'Kode_pos' => 204, 'kota' => 'Bandung', 'tgl_lahir' => '2004-04-05'],
            ['nama' => 'Resta', 'jk' => 'Perempuan', 'alamat' => 'Ciguriang girang', 'Kode_pos' => 201, 'kota' => 'Bandung', 'tgl_lahir' => '2004-05-06'],
            ['nama' => 'ikmal', 'jk' => 'Laki Laki', 'alamat' => 'Bojong Suren', 'Kode_pos' => 206, 'kota' => 'Bandung', 'tgl_lahir' => '2004-06-06'],
        ];
// masukkan data ke database
        DB::table('pembelis')->insert($pembeli);

    }
}
