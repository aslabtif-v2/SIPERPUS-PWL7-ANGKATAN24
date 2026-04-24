<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Menambahakn Role pada tabel users
        //role pustakawan
        $pustakawan = Role::create(['name'=> 'pustakawan']);
        //mahasiswa
        $mahasiswa = Role::create(['name'=> 'mahasiswa']);


        Permission::create(['name' => 'Kelala Buku']);

        User::create([
            'npm' => 5520,
            'username' => 'ujangS',
            'first_name' => 'ujang',
            'last_name' => 'Smit',
            'email' => 'ujang@gmail.com',
            'password' => Hash::make('12345678')
            ])->assignRole($pustakawan);
    }
}
