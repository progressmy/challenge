<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'full-name' => 'Yoshikawa Masaharu',
            'gender' => 1,
            'email' => 'masaharu@docomo.ne.jp',
            'postcode' => '5800015',
            'address'=> '大阪府松原市',
            'building_name'=>'マンション101',
            'opinion'=>'ご意見ありがとうございました',
        ];
        DB::table('contacts')->insert($param);
    }
}
