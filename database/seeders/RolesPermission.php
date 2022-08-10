<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = array(
            //users
            ['name' => 'view-users', 'value' => 'Users'],
            ['name' => 'create-users', 'value' => 'Users'],
            ['name' => 'edit-users', 'value' => 'Users'],
            ['name' => 'delete-users', 'value' => 'Users'],

            //planner
            ['name' => 'view-planner', 'value' => 'Planner'],
            ['name' => 'create-planner', 'value' => 'Planner'],
            ['name' => 'edit-planner', 'value' => 'Planner'],
            ['name' => 'delete-planner', 'value' => 'Planner'],

            //category
            ['name' => 'view-category', 'value' => 'Category'],
            ['name' => 'create-category', 'value' => 'Category'],
            ['name' => 'edit-category', 'value' => 'Category'],
            ['name' => 'delete-category', 'value' => 'Category'],

            //roles
            ['name' => 'view-roles', 'value' => 'Roles'],
            ['name' => 'create-roles', 'value' => 'Roles'],
            ['name' => 'edit-roles', 'value' => 'Roles'],
            ['name' => 'delete-roles', 'value' => 'Roles'],

            //administration
            ['name' => 'view-administration', 'value' => 'Administration'],
            ['name' => 'create-administration', 'value' => 'Administration'],
            ['name' => 'edit-administration', 'value' => 'Administration'],
            ['name' => 'delete-administration', 'value' => 'Administration'],

            //restaurant
            ['name' => 'view-restaurant', 'value' => 'Restaurant'],
            ['name' => 'create-restaurant', 'value' => 'Restaurant'],
            ['name' => 'edit-restaurant', 'value' => 'Restaurant'],
            ['name' => 'delete-restaurant', 'value' => 'Restaurant'],

            //packages
            ['name' => 'view-packages', 'value' => 'Packages'],
            ['name' => 'create-packages', 'value' => 'Packages'],
            ['name' => 'edit-packages', 'value' => 'Packages'],
            ['name' => 'delete-packages', 'value' => 'Packages'],

            //booking
            ['name' => 'view-bookings', 'value' => 'Bookings'],
            ['name' => 'create-bookings', 'value' => 'Bookings'],
            ['name' => 'edit-bookings', 'value' => 'Bookings'],
            ['name' => 'delete-bookings', 'value' => 'Bookings'],

        );



        foreach ($permission as $per) {
            $assign[]=$per['name'];
            Permission::create($per);
        }

        $super_admin = Role::create(['name' => 'Super-Admin']);
        $super_admin->givePermissionTo($assign);


    }
}
