<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChatUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chatusers')->insert([
            [
                'name'=>'Rey',
                'email'=>'rey@yahoo.com',
                'status'=>'I can handle myself',
                'password'=>Hash::make('rey@chatapp'),
                'image'=>'https://ionicframework.com/docs/demos/api/list/avatar-finn.png',
                'msgsCount'=>'0',
                'active_status'=>'disconnect',
            ],
            [
                'name'=>'Han Solo',
                'email'=>'hansolo@yahoo.com',
                'status'=>'Look, kid...',
                'password'=>Hash::make('han@chatapp'),
                'image'=>'https://ionicframework.com/docs/demos/api/list/avatar-finn.png',
                'msgsCount'=>'0',
                'active_status'=>'disconnect',
            ],
            [
                'name'=>'Luke',
                'email'=>'luke@yahoo.com',
                'status'=>'Your thoughts betray you',
                'password'=>Hash::make('luke@chatapp'),
                'image'=>'https://ionicframework.com/docs/demos/api/list/avatar-finn.png',
                'msgsCount'=>'0',
                'active_status'=>'disconnect',
            ]
        ]
    );
    }
}
