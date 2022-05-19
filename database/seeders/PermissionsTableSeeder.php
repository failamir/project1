<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'pangkat_create',
            ],
            [
                'id'    => 18,
                'title' => 'pangkat_edit',
            ],
            [
                'id'    => 19,
                'title' => 'pangkat_show',
            ],
            [
                'id'    => 20,
                'title' => 'pangkat_delete',
            ],
            [
                'id'    => 21,
                'title' => 'pangkat_access',
            ],
            [
                'id'    => 22,
                'title' => 'jabatan_create',
            ],
            [
                'id'    => 23,
                'title' => 'jabatan_edit',
            ],
            [
                'id'    => 24,
                'title' => 'jabatan_show',
            ],
            [
                'id'    => 25,
                'title' => 'jabatan_delete',
            ],
            [
                'id'    => 26,
                'title' => 'jabatan_access',
            ],
            [
                'id'    => 27,
                'title' => 'mata_pelajaran_create',
            ],
            [
                'id'    => 28,
                'title' => 'mata_pelajaran_edit',
            ],
            [
                'id'    => 29,
                'title' => 'mata_pelajaran_show',
            ],
            [
                'id'    => 30,
                'title' => 'mata_pelajaran_delete',
            ],
            [
                'id'    => 31,
                'title' => 'mata_pelajaran_access',
            ],
            [
                'id'    => 32,
                'title' => 'tuga_create',
            ],
            [
                'id'    => 33,
                'title' => 'tuga_edit',
            ],
            [
                'id'    => 34,
                'title' => 'tuga_show',
            ],
            [
                'id'    => 35,
                'title' => 'tuga_delete',
            ],
            [
                'id'    => 36,
                'title' => 'tuga_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
