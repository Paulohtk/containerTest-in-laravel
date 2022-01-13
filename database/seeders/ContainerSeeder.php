<?php

namespace Database\Seeders;

use App\Models\Container;
use Illuminate\Database\Seeder;

class ContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Container::create([
            'client' => 'Santos Brasil',
            'number' => 'ASDC1234567',
            'type' => 1,
            'status' => 1,
            'category' => 1,
        ]);
        Container::create([
            'client' => 'TESTE 2',
            'number' => 'ASDC7654321',
            'type' => 2,
            'status' => 1,
            'category' => 2,
        ]);
        Container::create([
            'client' => 'TESTE 3',
            'number' => 'AAAA0000000',
            'type' => 2,
            'status' => 2,
            'category' => 2,
        ]);
    }
}
