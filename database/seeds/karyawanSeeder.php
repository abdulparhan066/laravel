<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'abdulloh', 'ktp_no'=>'022213', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'rancakidul', 'telepon'=>'0823346732',
                'tanggal_lahir'=>'2020-01-03', 'agama'=>'hindu', 'kewenangan'=>'derektur utama', 'suku_bangsa'=>'mante'
        ],
            ['nama'=>'mang asep', 'ktp_no'=>'028976', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'rancabuaya', 'telepon'=>'08128758',
                'tanggal_lahir'=>'201-09-15', 'agama'=>'islam', 'kewenangan'=>'pasyen', 'suku_bangsa'=>'indonesia raya'
        ],
            ['nama'=>'bismillah', 'ktp_no'=>'0765468', 'jenis_kelamin'=>'prempuan', 'alamat_rumah'=>'kalimaya', 'telepon'=>'0897653728',
                'tanggal_lahir'=>'2002-05-03', 'agama'=>'islam', 'kewenangan'=>'direktur1', 'suku_bangsa'=>'indonesia rep'
        ],
            ['nama'=>'alhamdulillah beres', 'ktp_no'=>'02826182', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'rancamulya', 'telepon'=>'08232728',
                'tanggal_lahir'=>'2003-04-03', 'agama'=>'islam', 'kewenangan'=>'derektur pusat', 'suku_bangsa'=>'jawa'
        ],
            ['nama'=>'devia', 'ktp_no'=>'0445464', 'jenis_kelamin'=>'prempuan', 'alamat_rumah'=>'rancamanyar', 'telepon'=>'08223434345',
                'tanggal_lahir'=>'2000-05-11', 'agama'=>'islam', 'kewenangan'=>'Staf kedua', 'suku_bangsa'=>'bali'
        ],
            ['nama'=>'Oktana', 'ktp_no'=>'098684', 'jenis_kelamin'=>'prempuan', 'alamat_rumah'=>'bandung kidul', 'telepon'=>'0817683628',
                'tanggal_lahir'=>'2020-06-03', 'agama'=>'islam', 'kewenangan'=>'Staf utama', 'suku_bangsa'=>'jawa tengah'
        ],
            ['nama'=>'maulana', 'ktp_no'=>'0827282', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'bandung butuh kasih sayang', 'telepon'=>'089898773',
                'tanggal_lahir'=>'2001-12-08', 'agama'=>'islam', 'kewenangan'=>'Staf hayu', 'suku_bangsa'=>'jawa'
        ],
            ['nama'=>'yayaabina', 'ktp_no'=>'094893', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'soreang', 'telepon'=>'0962527273',
                'tanggal_lahir'=>'2009-11-03', 'agama'=>'islam', 'kewenangan'=>'STAF09', 'suku_bangsa'=>'batak'
        ],
            ['nama'=>'janesamir', 'ktp_no'=>'087672', 'jenis_kelamin'=>'prempuan', 'alamat_rumah'=>'kaboja', 'telepon'=>'0824454454',
                'tanggal_lahir'=>'2002-12-12', 'agama'=>'hindu', 'kewenangan'=>'Admin', 'suku_bangsa'=>'mante'
        ],
            ['nama'=>'guntur said', 'ktp_no'=>'007623', 'jenis_kelamin'=>'laki-laki', 'alamat_rumah'=>'bandung-ranca', 'telepon'=>'08234675',
                'tanggal_lahir'=>'2003-03-03', 'agama'=>'hindu', 'kewenangan'=>'Admin psaran', 'suku_bangsa'=>'abon'
        ],

    ];
        DB::table('karyawans')->insert($posts);
    }
}
