<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert([
            [
                "name"=>"john doe",
                "email"=>"johndoe@email.com",
                "password"=>Hash::make('secret'),
                "remember_token"=>'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ] 
        ]);
    }
}
