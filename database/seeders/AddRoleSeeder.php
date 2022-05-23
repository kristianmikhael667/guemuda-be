<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AddRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'subscribe']);
        $permissions = [
            'subscribe',
            'contributor',
            'admin',
            'editor',
        ];

        foreach ($permissions as $permission) {
            Role::create(['name' => $permission]);
        }
    }
}
