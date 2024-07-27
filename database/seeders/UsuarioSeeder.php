<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $dados=['name'=>"Thiago",'email'=>"teste@email",'password'=>bcrypt("123")];
        
        User::create($dados);
    }
}
