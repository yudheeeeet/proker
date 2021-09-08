<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        
        $admin = User::create([
            'name' => 'RT 01 RW 37 Sumbersari',
            'email' => 'kknsumbersari@gmail.com',
            'password' => bcrypt('sumbersari123')
        ]);

        $admin->roles()->attach($adminRole);
    }
}
