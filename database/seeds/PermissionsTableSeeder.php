<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-04-08 07:04:54',
            'updated_at' => '2019-04-08 07:04:54',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '17',
                'title'      => 'drinks_type_create',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '18',
                'title'      => 'drinks_type_edit',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '19',
                'title'      => 'drinks_type_show',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '20',
                'title'      => 'drinks_type_delete',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '21',
                'title'      => 'drinks_type_access',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '22',
                'title'      => 'drink_create',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '23',
                'title'      => 'drink_edit',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '24',
                'title'      => 'drink_show',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '25',
                'title'      => 'drink_delete',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ],
            [
                'id'         => '26',
                'title'      => 'drink_access',
                'created_at' => '2019-04-08 07:04:54',
                'updated_at' => '2019-04-08 07:04:54',
            ]];

        Permission::insert($permissions);
    }
}
