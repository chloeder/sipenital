<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'KETUT SURYANA, S.I.K., S.H., M.M.',
                'jabatan' => 'Kapolres Minahasa',
                'email' => 'admin1@gmail.com',
                'nrp_nip' => '81040859',
                'role' => 1,
                'password' => bcrypt('minahasa01'),
                'status' => 'active',
            ],
            [
                'name' => 'YINDAR T. SAPANGALLO, S.Sos',
                'jabatan' => 'Wakapolres Minahasa',
                'email' => 'admin2@gmail.com',
                'nrp_nip' => '73080786',
                'role' => 1,
                'password' => bcrypt('minahasa02'),
                'status' => 'active',
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
