<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           RolesPermission::class,
        ]);
        // \App\Models\User::factory(10)->create();

        $hash=Hash::make('12345678');
        $user=User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 1,

        ]);

        $role=Role::findByName('Super-Admin');
        $user->assignRole($role);

    }
}
