<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Asep', 'nama_barang' => 'Keyboard Razer', 'qty' => 2, 'tgl_pesan' => '2021 - 10 - 30'],
            ['nama_pelanggan' => 'Asap', 'nama_barang' => 'Mouse Razer', 'qty' => 1, 'tgl_pesan' => '2021 - 10 - 30'],
            ['nama_pelanggan' => 'Tuti', 'nama_barang' => 'Headset Razer', 'qty' => 2, 'tgl_pesan' => '2021 - 10 - 30'],
            ['nama_pelanggan' => 'Zaki', 'nama_barang' => 'Kursi Gaming', 'qty' => 1, 'tgl_pesan' => '2021 - 10 - 30'],
            ['nama_pelanggan' => 'Tatang', 'nama_barang' => 'Kursi gaming', 'qty' => 2, 'tgl_pesan' => '2021 - 10 - 30'],
        ];
// masukkan data ke database
        DB::table('pesanans')->insert($pesanan);
    }
}
