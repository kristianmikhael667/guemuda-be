<?php

namespace Database\Seeders;

use App\Models\Permission as ModelsPermission;
use App\Models\Role as ModelsRole;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'subscribe']);
        $role = Role::create(['name' => 'superadmin']);

        $user = User::create([
            'first_name' => 'Super',
            'last_name' => 'Guemuda',
            'username' => 'super',
            'email' => 'super@gmail.com',
            'address' => "-",
            'city' => "-",
            'job' =>  "-",
            'bio' =>  "-",
            'phone_number' => '08129384123113',
            'date_birth' => Carbon::now(),
            'roles' => $role->id,
            'rolesname' => $role->name,
            'password' => Hash::make('12345678'),
        ]);


        $permission = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permission);

        $user->assignRole([$role->id]);
    }
}
