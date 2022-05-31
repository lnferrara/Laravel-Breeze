<?php

namespace Database\Seeders;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Marcaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::insert(
            [
                ['mkNombre'=>"Nikkon"],
                ['mkNombre'=>"JBL"],
                ['mkNombre'=>"Daewo"]
                
                

            ]

            );
    }
}
