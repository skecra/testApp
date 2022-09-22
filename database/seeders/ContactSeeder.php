<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $contacts = [
//            [
//            "first_name"=>'Luka',
//            "last_name"=>'Radulovic',
//            "phone_number"=>'067205336',
//            "email"=>'luka@mail.com',
//                ],
//            [
//            "first_name"=>'Marko',
//            "last_name"=>'Markovic',
//            "phone_number"=>'067221336',
//            "email"=>'marko@mail.com'],
//            [
//                "first_name"=>'Janko',
//                "last_name"=>'Jankovic',
//                "phone_number"=>'067854322',
//                "email"=>'janko@mail.com'
//            ]
//
//        ];
//
//        foreach ($contacts as $c){
//            Contact::query()->create($c);
//        }

        Contact::factory(100)->create();
    }
}
