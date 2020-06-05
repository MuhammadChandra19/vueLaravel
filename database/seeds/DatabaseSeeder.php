<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $packages = [
            [
                'name'=> 'Bayi', 
                'price' => 19900,
                'users' => 938,
                'features' => "unlimitted bandwith, unlimitted database"
            ],
            [
                'name'=> 'Pelajar', 
                'price' => 19900,
                'users' => 938,
                'features' => "unlimitted bandwith, unlimitted database"
            ],
            [
                'name'=> 'Personal', 
                'price' => 19900,
                'users' => 938,
                'features' => "unlimitted bandwith, unlimitted database"
            ],
            [
                'name'=> 'Bisnis', 
                'price' => 19900,
                'users' => 938,
                'features' => "unlimitted bandwith, unlimitted database"
            ],
        ];
        DB::table('pakets')->insert($packages);
    }
}
