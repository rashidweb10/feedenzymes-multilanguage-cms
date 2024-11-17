<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
            [
                'app_name'         => 'Feedenzymes',
                'app_logo'         => 'assets/admin/img/app/logo.png',
                'timezone'         => 'Asia/Kolkata',
                'author_name'      => 'Maptek Softwares',
                'author_link'      => 'https://maptek.online/',
                'ui_mode'          => 'light',
                'sidebar_collapse' => 'off',
                'phone'            => '-',
                'whatsapp_phone'   => '-',
                'google_map'       => 'https://google.com/',
                'email'            => 'app@gmail.com',
                'address'          => '-',
                'about'            => '-',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ]
        ];        
        DB::table('settings')->insert($insert);
    }
}