<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts= [
            ['nis'=>'00889758', 'nama'=>'parhan', 'jenis_kelamin'=>'laki-laki', 'tanggal'=>'2020-01-21', 'alamat'=>'rancamanyar', 'umur'=>17
        ],
            ['nis'=>'0221223', 'nama'=>'abdul', 'jenis_kelamin'=>'laki-laki', 'tanggal'=>'2020-01-24', 'alamat'=>'vietnam', 'umur'=>52
        ],
        ['nis'=>'077632', 'nama'=>'pelangidimatamu', 'jenis_kelamin'=>'prempuan', 'tanggal'=>'2020-02-22', 'alamat'=>'bojong', 'umur'=>30
        ],


        ];
        DB::table('siswa')->insert($posts);
    }
}
