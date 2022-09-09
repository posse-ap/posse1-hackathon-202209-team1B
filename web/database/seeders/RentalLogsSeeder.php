<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RentalLog;

class RentalLogsSeeder extends Seeder
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
                'user_id' => 1,
                'item_id' => 1,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 4,
                'item_id' => 1,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 5,
                'item_id' => 1,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 1,
                'item_id' => 3,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 1,
                'item_id' => 4,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 1,
                'item_id' => 5,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 2,
                'item_id' => 1,
                'start_date' => "2022-08-10 00:00:00",
                'end_date' => "2022-08-11 00:00:00",
                'return_date' => "2022-08-12 00:00:00",
            ],
            [
                'user_id' => 1,
                'item_id' => 1,
                'start_date' => "2022-08-08 00:00:00",
                'end_date' => "2022-08-09 00:00:00",
                'return_date' => "2022-09-09 00:00:00",
            ],
            [
                'user_id' => 2,
                'item_id' => 1,
                'start_date' => "2022-08-10 00:00:00",
                'end_date' => "2022-08-11 00:00:00",
                'return_date' => "2022-09-09",
            ],
            [
                'user_id' => 3,
                'item_id' => 2,
                'start_date' => "2022-08-10 00:00:00",
                'end_date' => "2022-08-11 00:00:00",
                'return_date' => "2022-09-09",
            ],
            [
                'user_id' => 6,
                'item_id' => 2,
                'start_date' => "2022-08-10 00:00:00",
                'end_date' => "2022-08-11 00:00:00",
                'return_date' => "2022-09-09",
            ],
            [
                'user_id' => 7,
                'item_id' => 2,
                'start_date' => "2022-08-10 00:00:00",
                'end_date' => "2022-08-11 00:00:00",
                'return_date' => "2022-09-09",
            ],
        ];

        RentalLog::insert($data);
    }
}
