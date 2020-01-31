<?php

use Illuminate\Database\Seeder;

class TabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post =
        [
            ['nis' =>'44556', 'name' =>'parhan', 'kelas' =>'rpl1', 'jumlah' =>4],
            ['nis' =>'44556', 'name' =>'parhan', 'kelas' =>'rpl7', 'jumlah' =>5],
            ['nis' =>'44556', 'name' =>'parhan', 'kelas' =>'rpl6', 'jumlah' =>6],
            ['nis' =>'44556', 'name' =>'parhan', 'kelas' =>'rpl3', 'jumlah' =>7],
            ['nis' =>'44556', 'name' =>'parhan', 'kelas' =>'rpl2', 'jumlah' =>8],

        ];
        DB::table('tabungan'->insert($post));
    }
}
