<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Membuat role
        $roleAdmin = Role::updateOrCreate(['name' => 'admin']);
        $rolePegawai = Role::updateOrCreate(['name' => 'pegawai']);

        // Membuat atau memperbarui permission dan assign ke role
        $permissions = [
            'view admin dashboard',
            'manage divisi',
            'manage jatah cuti',
            'manage pegawai',
            'manage pengajuan cuti',
            'view pegawai dashboard',
            'create pengajuan cuti',
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }

        $roleAdmin->syncPermissions([
            'view admin dashboard', 
            'manage divisi', 
            'manage jatah cuti', 
            'manage pegawai', 
            'manage pengajuan cuti'
        ]);

        $rolePegawai->syncPermissions([
            'view pegawai dashboard', 
            'create pengajuan cuti'
        ]);

        // Assign role ke user
        $userAdmin = User::find(2); // Gantilah dengan ID user admin
        $userAdmin->assignRole($roleAdmin);

        $userPegawai = User::find(1); // Gantilah dengan ID user pegawai
        $userPegawai->assignRole($rolePegawai);
    }
}
