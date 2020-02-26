<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@rent.pl";
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach(1);

        $user = new User();
        $user->name = "Janek";
        $user->email = "janek@gmail.com";
        $user->password = bcrypt('janek');
        $user->save();
        $user->roles()->attach(1);
    }
}
