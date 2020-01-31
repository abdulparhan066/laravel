<?php

use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =
        [
            ['jenis_motor'=>'sport', 'nama_motor'=>'CBR', 'tipe_motor'=>'Honda CBR 250',
                'warna_motor'=>'silver', 'no_mesin'=>'d4563', 'tahun_dibuat'=>'2001-01-05',
                'tempat_dibuat'=>'Honda indonesia'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'sport', 'nama_motor'=>'CBR', 'tipe_motor'=>'Honda CBR 250',
                'warna_motor'=>'silver', 'no_mesin'=>'d4563', 'tahun_dibuat'=>'2001-01-05',
                'tempat_dibuat'=>'Honda indonesia'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],

            ['jenis_motor'=>'bebek', 'nama_motor'=>'Supra X', 'tipe_motor'=>'Honda Supra X 125',
                'warna_motor'=>'hitam', 'no_mesin'=>'rr442', 'tahun_dibuat'=>'2000-05-01',
                'tempat_dibuat'=>'Honda Indo'],


        ];
        DB::table('motors')->insert($posts);
    }
}
