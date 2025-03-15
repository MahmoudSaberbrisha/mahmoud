<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin', 'guard_name' => 'admin']);
        Role::create(['name' => 'user', 'guard_name' => 'admin']);
        Role::create(['name' => 'edit', 'guard_name' => 'admin']);
        // Add other roles as needed
    }
}
