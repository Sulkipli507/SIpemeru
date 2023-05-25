<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'sul';
        $admin->email = 'sul@gmail.com';
        $admin->password = \Hash::make('12345678');
        $admin->role = 'staff';
        $admin->save();
        $this->command->info("Staff berhasil ditambahkan");
    }
}
