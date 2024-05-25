<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            BankTableSeeder::class,
            GameTypeTableSeeder::class,
            ProductCodeSeeder::class,
            ProductTableSeeder::class,
            GameTypeProductTableSeeder::class,
            BannerSeeder::class,
            BannerTextSeeder::class,
            CQ9GameListTableSeeder::class
        ]);
      
    }
}