<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Bagsoling',
                'fname'=>'Daileen',
                'address'=>'Bohol',
                'phone'=>'0909-898-7657',
                'email'=>'dileen@email.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Scoot',
                'fname'=>'Hardin',
                'address'=>'Cebu',
                'phone'=>'0909-358-6537',
                'email'=>'hardin@email.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Homme',
                'fname'=>'Samantha',
                'address'=>'Palawan',
                'phone'=>'0909-124-0965',
                'email'=>'sam@email.com',
                'password'=>bcrypt('password123')
            ],
        ];
    
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
