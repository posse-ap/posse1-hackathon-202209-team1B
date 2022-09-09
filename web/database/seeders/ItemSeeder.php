<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyImagePath = 'public/img/dummy.png';
        $path = Storage::putFile('public', new File($dummyImagePath));

        $data = [
            [
                'category_id' => 1,
                'name' => 'Goプログラミング実践入門　標準ライブラリでゼロからWebアプリを作る impress top gearシリーズ',
                'image_path' => "public/go.jpg",
                'available_days' => 14,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => 'Rustプログラミング入門',
                'image_path' => "public/rust.jpg",
                'available_days' => 14,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => 'Go言語ハンズオン',
                'image_path' => 'public/go2.jpg',
                'available_days' => 2,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => 'PHPフレームワーク Laravel実践',
                'image_path' => 'public/laravel.jpeg',
                'available_days' => 2,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 2,
                'name' => 'イシューからはじめよ──知的生産の「シンプルな本質」',
                'image_path' => 'public/issue.jpg',
                'available_days' => 4,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 2,
                'name' => '1日1話、読めば心が熱くなる365人の仕事の教科書',
                'image_path' => 'public/work.jpeg',
                'available_days' => 14,
                'is_public' => false,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => 'PHPフレームワークLaravel入門 第2版',
                'image_path' => 'public/laravel2.png',
                'available_days' => 14,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => '1冊ですべて身につくHTML & CSSとWebデザイン入門講座',
                'image_path' => 'public/htmlcss.jpg',
                'available_days' => 11,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 1,
                'name' => 'Reactビギナーズガイド ―コンポーネントベースのフロントエンド開発入門',
                'image_path' => $path,
                'available_days' => 11,
                'is_public' => true,
                'provider' => '株式会社アンチパターン',
            ],
            [
                'category_id' => 2,
                'name' => '7つの習慣',
                'image_path' => $path,
                'available_days' => 1,
                'is_public' => true,
                'provider' => 'スティーブン・R・コヴィー',
            ],
            [
                'category_id' => 1,
                'name' => '1冊ですべて身につくHTML & CSSとWebデザイン入門講座',
                'image_path' => $path,
                'available_days' => 1,
                'is_public' => true,
                'provider' => '楽天グループ株式会社',
            ],
            [
                'category_id' => 4,
                'name' => '税金で買った本',
                'image_path' => $path,
                'available_days' => 1,
                'is_public' => true,
                'provider' => 'ずいの',
            ],
            [
                'category_id' => 4,
                'name' => '仕事・職業 (ポプラディア情報館)',
                'image_path' => $path,
                'available_days' => 12,
                'is_public' => true,
                'provider' => 'ポプラ社',
            ],
            [
                'category_id' => 2,
                'name' => '１分で話せ　世界のトップが絶賛した大事なことだけシンプルに伝える技術',
                'image_path' => $path,
                'available_days' => 2,
                'is_public' => true,
                'provider' => 'ポプラ社',
            ],
            [
                'category_id' => 2,
                'name' => '１日１ページ、読むだけで身につく世界の教養３６５',
                'image_path' => $path,
                'available_days' => 5,
                'is_public' => true,
                'provider' => 'ポプラ社',
            ],
            [
                'category_id' => 2,
                'name' => '嫌われる勇気',
                'image_path' => $path,
                'available_days' => 5,
                'is_public' => true,
                'provider' => 'ポプラ社',
            ],
            [
                'category_id' => 5,
                'name' => 'か「」く「」し「」ご「」と「',
                'image_path' => $path,
                'available_days' => 12,
                'is_public' => true,
                'provider' => '角川文庫',
            ],
            [
                'category_id' => 5,
                'name' => '青くて痛くて脆い',
                'image_path' => $path,
                'available_days' => 12,
                'is_public' => true,
                'provider' => '角川文庫',
            ],
            [
                'category_id' => 5,
                'name' => '君の膵臓をたべたい',
                'image_path' => $path,
                'available_days' => 12,
                'is_public' => true,
                'provider' => '角川文庫',
            ],
            [
                'category_id' => 5,
                'name' => '時をかける少女',
                'image_path' => $path,
                'available_days' => 12,
                'is_public' => true,
                'provider' => '角川文庫',
            ],
        ];

        Item::insert($data);
    }
}
