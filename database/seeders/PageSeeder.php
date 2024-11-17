<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call the helper function to get the language list
        $languageList = getLanguageList(); // This assumes the function is accessible here

        // Define dummy page names
        $pageNames = ['home', 'about', 'career', 'contact'];

        // Loop through each language
        foreach ($languageList as $lang => $langName) {
            foreach ($pageNames as $pageName) {
                DB::table("{$lang}_pages")->insert([
                    'name' => $pageName,
                    'image' => null,  // You can add dummy image paths if needed
                    'contents' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}