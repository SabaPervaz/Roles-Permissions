<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $writer = Role::create(['name' => "writer"]);
        $user = Role::create(['name' => 'user']);


        // Create users

        $adminUser = User::create([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $writerUser = User::create([
            'name' => "writer",
            'email' => 'writer@gmail.com',
            'password' => Hash::make('12345678'),


        ]);


        $user = User::create([
            'name' => "user",
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),


        ]);

        // Assign Roles
        $adminUser->assignRole([$admin,$writer]);
        $writerUser->assignRole([$writer,$user]);
        $user->assignRole($user);
    }
}
