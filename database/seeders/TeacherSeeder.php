<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'abinovalfauzi',
            'password' => bcrypt('12345678'),
            'is_teacher' => true
        ]);

        Teacher::create([
            'name' => 'Abi Noval Fauzi',
            'nip' => '1200761612',
            'user_id' => $user->id
        ]);
    }
}
