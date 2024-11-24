<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loop through each language and seed the respective table
        foreach (getLanguageList() as $lang => $langName) {
            $tableName = "{$lang}_productions";

            DB::table($tableName)->insert([
                [
                    'name' => 'Customized Enzymes',
                    'image' => null,
                    'contents' => json_encode([]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Individual Enzymes',
                    'image' => null,
                    'contents' => json_encode([]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
