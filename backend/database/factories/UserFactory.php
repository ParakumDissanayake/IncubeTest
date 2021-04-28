<?php

namespace Database\Factories;

use App\User;
use App\stylemaster; 
use Faker\Generator as Faker; 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


    $factory->define(User::class, function (Faker $faker){
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    });

     $factory->define(stylemaster::class, function (Faker $faker){
        return [
            'style_code' => $this->faker->Code,
            'style_name' => $this->faker->Name,
            'style_quantity' => $this->faker->Quantity,
            'style_Status' => $this->faker->Status,
            'style_Type' => $this->faker->Type,
            
        ];
    });

    
