<?php

namespace Database\Seeders;

use DB;
use Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        // Insert data user
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        // Insert data mahasiswa menggunakan Query Builder
        DB::table('mahasiswa')->insert([
            'npm'=> '2428250014',
            'nama'=>'Fernando Antonius',
            'tempat_lahir'=> 'Palembang',
            'tanggal_lahir'=>'2007-02-15',
            'alamat'=> 'Jln. Karya Baru',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('mahasiswa')
            ->where ('nama','Fernando Antonius')
            ->update (['nama' => 'Fernando']); 

        /* Mahasiswa::insert([
            'npm'=> '2428250010',
            'nama'=>'Ucup',
            'tempat_lahir'=> 'Jakarta',
            'tanggal_lahir'=>'2007-08-20',
            'alamat'=> 'Jln. Jaya Jaya Jaya',
            'created_at'=> date('Y-m-d H:i:s'),
        ]); */

        /* Retrieve all data
        Mahasiswa::all();
        Mahasiswa::where('id', '<', '3')->get();
        
        Mahasiswa::select(['npm', 'nama'])->get(); */
    }
}
