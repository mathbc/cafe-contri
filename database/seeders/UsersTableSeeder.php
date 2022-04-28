<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioAdmin = new User();

        $usuarioAdmin->name = "Admin Café Contri";
        $usuarioAdmin->email = "admin@cafecontri.com.br";
        $usuarioAdmin->password = Hash::make('Xerox@123');
        $usuarioAdmin->tipo = "PESSOA_JURIDICA";
        $usuarioAdmin->tipo_permissao = "ADMIN";

        $usuarioAdmin->save();
    }
}
