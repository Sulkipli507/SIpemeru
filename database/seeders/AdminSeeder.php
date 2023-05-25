<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'sulkipli';
        $admin->email = 'sulkipli@gmail.com';
        $admin->password = \Hash::make('12345678');
        $admin->role = 'admin';
        $admin->save();
        $this->command->info("Admin berhasil ditambahkan");
    }
}
