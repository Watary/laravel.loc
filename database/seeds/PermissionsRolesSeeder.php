<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Created roles
        $role['administrator'] = Role::create(['name' => 'administrator']);

        // Create permissions
        $permission['create_article'] = Permission::create(['name' => 'create_article']);
        $permission['update_article'] = Permission::create(['name' => 'update_article']);
        $permission['delete_article'] = Permission::create(['name' => 'delete_article']);

        // Role administrator give permissions
        $role['administrator']->givePermissionTo($permission['create_article']);
        $role['administrator']->givePermissionTo($permission['update_article']);
        $role['administrator']->givePermissionTo($permission['delete_article']);


        $user = User::find(1);
        $user->assignRole('administrator');
    }
}
