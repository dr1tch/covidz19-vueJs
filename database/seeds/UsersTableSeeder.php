<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'username' => '4dm1n',
        	'fname' => 'Aymen',
        	'lname' => 'Bahar',
        	'email' => 'admin@covidz19.dz',
        	'password' => Hash::make('ycef5411@gmail.com'),
        	// 'gender' => '0',
        	// 'birth_date' => '1997-6-4'
        ]);

        $user = User::create([
        	'username' => 'temabens',
        	'fname' => 'Fatema Zohra',
        	'lname' => 'Bensayah',
        	'email' => 'tema@gmail.com',
        	'password' => Hash::make('password'),
        	'gender' => '1',
        	'birth_date' => '1997-8-5'
        ]);


        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
