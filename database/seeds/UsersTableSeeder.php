<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          [
            'name' => 'Montela',
            'email' => 'indotehnik1989@gmail.com',
            'role' => '2',
            'role_type' => 'GA',
            'password' => bcrypt('jakarta37'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        ]);
  }
}
