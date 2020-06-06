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
                'features' => "0.5X RESOURCE POWER, 500 MB Disk Space, Unlimitted bandwith, Unlimitted database, 1 Domain, Instant Backup, Unlimited SSL Gratis Selamanya"
            ],
            [
                'name'=> 'Pelajar', 
                'price' => 46900,
                'users' => 4168,
                'features' => "1X RESOURCE POWER, Unlimited Disk Space, Unlimitted bandwith, Unlimitted database, Unlimited POP3 Email, 10 Addon Domains, Instant Backup, Unlimited SSL Gratis Selamanya"
            ],
            [
                'name'=> 'Personal', 
                'price' => 58900,
                'users' => 10017,
                'features' => "2X RESOURCE POWER, Unlimited Disk Space, Unlimitted bandwith, Unlimitted database, Unlimited POP3 Email, 10 Addon Domains, Instant Backup, Unlimited SSL Gratis Selamanya, Private Name Server, SpamAssasin Mail Protection"
            ],
            [
                'name'=> 'Bisnis', 
                'price' => 109900,
                'users' => 3552,
                'features' => "3X RESOURCE POWER, Unlimited Disk Space, Unlimitted bandwith, Unlimitted database, Unlimited POP3 Email, Maghic Auto Backup and Restore, 10 Addon Domains, Instant Backup, Unlimited SSL Gratis Selamanya, Private Name Server, Prioritas Layanan Suport, SpamExpert Pro Mail Protection"
            ],
        ];
        DB::table('pakets')->insert($packages);
    }
}
