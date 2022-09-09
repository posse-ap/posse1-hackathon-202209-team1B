<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => '書籍：技術書'],
            ['name' => '書籍：ビジネス書'],
            ['name' => 'エンターテインメント'],
            ['name' => '仕事・職業'],
            ['name' => '小説'],
        ];

        Category::insert($data);
    }
}