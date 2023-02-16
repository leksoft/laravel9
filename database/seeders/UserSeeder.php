<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User() ;  // Insert User 1  
        $user->name = "Admin Laravel 9" ;
        $user->email = "laravel9@gmail.com"; 
        $user->password = Hash::make('password');
        $user->save() ; 

        $user = new \App\Models\User() ;  // Inser User 2
        $user->name = "Admin Yii" ;
        $user->email = "yii@gmail.com"; 
        $user->password = Hash::make('password');
        $user->save() ; 

        
        
    }
}

