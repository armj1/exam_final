<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'id' => '1',
            'email' => 'admin@app.com',
            'name' => 'admin',
            'surname' => 'admin',
            'department' => 'admin',
            'role' => '1',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'email' => 'annalu@app.com',
            'name' => 'Anna',
            'surname' => 'Lu',
            'department' => 'Finance department',
            'role' => '2',
            'password' => bcrypt('parole123'),
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'email' => 'nori@app.com',
            'name' => 'Nelly',
            'surname' => 'Adams',
            'department' => 'Marketing department',
            'role' => '2',
            'password' => bcrypt('parole456'),
        ]);
    }
}
