<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionStaging extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'approve-comment-com',
            'premium-list',
            'premium-create',
            'premium-edit',
            'premium-delete',
            'list-user-superadmin',
            'list-user-admin',
            'list-user-editor',
            'list-user-contributor',
            'list-user-subscribe',
            'create-user-superadmin',
            'create-user-admin',
            'create-user-editor',
            'create-user-contributor',
            'create-user-subscribe',
            'list-community-group',
            'create-community-group',
            'edit-community-group',
            'delete-community-group'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
