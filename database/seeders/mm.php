<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class mm extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //      $f = Faker::create();

    // for($i=0;$i<=5;$i++)
    //     {

    //         DB::table('sports')->insert([
    //             'name' => $f->name,
    //             'enrollment_number' => $f->unique()->numberBetween(1000,9999),
    //             'game' =>$f->RandomElement(['Cricket', 'Football', 'Volleyball']),
    //             ]);
                
                
    //             }

    // $f=Faker::create();
    // for($i=0;$i<=5;$i++)
    //     {
    //         DB::table('singup')->insert([
    //            'name'=>$f->name,
    //            'ennumber'=>$f->numberBetween(1000,9999),
    //            'password'=>Hash::make($f->password),
    //            'sem'=>$f->image(public_path('images'),'people')
    //         ]);
    //     }
    }
}
