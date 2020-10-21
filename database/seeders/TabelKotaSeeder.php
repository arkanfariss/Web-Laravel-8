<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota_jogja')->insert([
            ['provinsi_id'=>1,'nama_kota'=>'Kota Madya Jogja'],
            ['provinsi_id'=>2,'nama_kota'=>'Sleman'],
            ['provinsi_id'=>3,'nama_kota'=>'Bantul'],
            ['provinsi_id'=>4,'nama_kota'=>'Kulonprogo'],
            ['provinsi_id'=>5,'nama_kota'=>'Gunungkidul'],
            ['provinsi_id'=>6,'nama_kota'=>'Magelang'],
            ]);
    }
}
