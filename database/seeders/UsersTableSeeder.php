<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Admin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRoles = Roles::where('name','admin')->first();
        $authorRoles = Roles::where('name','author')->first();
        $userRoles = Roles::where('name','user')->first();

        $admin = Admin::create([
            'admin_name' =>'tuanadmin',
            'admin_email' => 'tuanadmin@yahoo.com',
            'admin_password' => md5('123456'),
            'admin_phone'=> '123456789'
        ]);
        
        $author = Admin::create([
            'admin_name' =>'tuanauthor',
            'admin_email' => 'tuanauthor@yahoo.com',
            'admin_password' => md5('123456'),
            'admin_phone'=> '123456789'
        ]);

        $user = Admin::create([
            'admin_name' =>'tuanuser',
            'admin_email' => 'tuanuser@yahoo.com',
            'admin_password' => md5('123456'),
            'admin_phone'=> '123456789'
        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);
    }
}
