<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Sara Arrabal',
            'email' => 'saraarrabalspicologa@gmail.com',
            'password' => bcrypt('12345678'),
            'description' => 'Dueña y señora de esta web',
        ]);
    }
}
