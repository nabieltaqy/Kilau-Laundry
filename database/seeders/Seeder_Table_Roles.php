<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;



class Seeder_Table_Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['Jenis_role' => 'Owner'],
            ['Jenis_role' => 'Karyawan'],
        ];

        foreach ($data as $value) {
            Role::insert([

                'Jenis_role' => $value ['Jenis_role'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]
            );
        }
    }
}
