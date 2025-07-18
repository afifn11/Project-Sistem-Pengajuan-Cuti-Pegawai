<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::updateOrCreate(['name' => 'admin']);
        Role::updateOrCreate(['name' => 'pegawai']);
    }
}
