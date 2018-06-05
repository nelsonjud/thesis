<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Employees;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert(
        //     [
        //         [
        //             'username'                  => 'admin',
        //             'email'                     => 'info@admin.com',
        //             'password'                  => 'admin',
        //             'user_type'                 => 1
        //         ],[
        //             'username'                  => 'user',
        //             'email'                     => 'info@user.com',
        //             'password'                  => 'user',
        //             'user_type'                 => 2
        //         ]
        //     ]);



        $user = User::create([
            'username'                  => 'admin',
            'email'                     => 'info@admin.com',
            'password'                  => 'admin',
            'user_type'                 => 1
        ]);

        $user_profile = [
            'first_name'                => "admin",
            'middle_name'               => "admin",
            'last_name'                 => "admin",
            'contact'                   => "1234567890",
            'gender'                    => "Male"
        ];

        $user->employees()->save(new Employees($user_profile));

        $user = User::create([
            'username'                  => 'user',
            'email'                     => 'info@user.com',
            'password'                  => 'user',
            'user_type'                 => 1
        ]);

        $user_profile = [
            'first_name'                => "FirstUser",
            'middle_name'               => "MiddleUser",
            'last_name'                 => "LastUser",
            'contact'                   => "1234567890",
            'gender'                    => "Male"
        ];

        $user->employees()->save(new Employees($user_profile));
    }
}