<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //         $this->call(SiswaSeeder::class);
    //         $this->call(karyawanSeeder::class);
            factory(App\costumer::class, 1000) ->create();
            //factory(App\tabungan::class,) ->create();

            // $this->call(UsersTableSeeder::class);
            $this->call(MotorSeeder::class);
    }


}
