<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$H19Y6iz8yRVq.ROglBjaR.lmsceJFMLDquRBUJ7vmrFc4yxgc8FOG',
            'remember_token' => null,
            'created_at'     => '2019-04-08 07:02:27',
            'updated_at'     => '2019-04-08 07:02:27',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
