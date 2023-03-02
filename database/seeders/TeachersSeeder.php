<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers::insert([
            [
                'nama' => 'Novra Edi',
                'nip' => '13121242'
            ],
            [
                'nama' => 'Cipta Tri',
                'nip' => '13121245'
            ],
        ]);
    }
}
