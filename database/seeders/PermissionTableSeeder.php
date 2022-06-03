<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'premium-list',
            'premium-create',
            'premium-edit',
            'premium-delete',
            'webinar-list',
            'webinar-create',
            'webinar-edit',
            'webinar-delete',
            'community-list',
            'community-create',
            'community-edit',
            'community-delete',
            'approve-comment',
            'approve-comment-com',
            'media-list'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
