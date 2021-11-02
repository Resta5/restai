<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class suplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Asep', 'alamat' => 'Cipadung', 'kode_pos' => 554, 'kota' => 'Bandung'],
            ['nama' => 'Asap', 'alamat' => 'Cibaduyut', 'kode_pos' => 555, 'kota' => 'Bandung'],
            ['nama' => 'Tuti', 'alamat' => 'Cipasung', 'kode_pos' => 565, 'kota' => 'TasikMalaya'],
            ['nama' => 'Zaki', 'alamat' => 'Serpong', 'kode_pos' => 566, 'kota' => 'Jakarta'],
            ['nama' => 'Tatang', 'alamat' => 'Magelang', 'kode_pos' => 577, 'kota' => 'DI Yogyakarta'],
        ];
// masukkan data ke database
        DB::table('supliers')->insert($suplier);

    }
}
