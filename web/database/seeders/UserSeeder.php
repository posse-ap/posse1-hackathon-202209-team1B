<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
                'name' => "高橋 日菜",
                'email' => 'hina@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "佐藤 大暉",
                'email' => 'daiki@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "佐々木 奈緒子",
                'email' => 'nanako@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "大沢 れいな",
                'email' => 'reina@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "古谷 明日香",
                'email' => 'asuka@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "齋藤 ひかる",
                'email' => 'hikaru@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "渡邉瑛貴",
                'email' => 'eiki@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "磯山弦太",
                'email' => 'genta@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "廣中佑香",
                'email' => 'yuuka@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "青柳 仁",
                'email' => 'jin@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => "守安勇人",
                'email' => 'yuto@com',
                'password' => Hash::make("password"),
                'email_verified_at' => Carbon::now(),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
            ],
        ];

        User::insert($data);
    }
}