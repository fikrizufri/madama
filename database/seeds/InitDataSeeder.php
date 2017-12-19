<?php

use Illuminate\Database\Seeder;
use App\User;

class InitDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->UserSeeder();
    }

    public function UserSeeder()
    {
        $data = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ],
            [
                'name'     => 'User',
                'email'    => 'user@gmail.com',
                'password' => bcrypt('user213')
            ]
        ];

        foreach($data as $user){
            User::create($user);
        }
    }
}
