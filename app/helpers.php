<?php

use Illuminate\Support\Facades\App;

if (!function_exists('languageSession')) {
    function languageSession() {
        return session('language', 'en');
    }
}

if (!function_exists('languageList')) {
    function getLanguageList() {
        return [
            'en' => 'English', 
            'es' => 'Español', 
            'fr' => 'Français', 
            'ru' => 'Русский', 
            'th' => 'ไทย', 
            'tr' => 'Türk', 
            'pt' => 'Português', 
            'ko' => '한국어', 
            'vi' => 'Vietnamese', 
            'id' => 'Indonesia'
        ];
    }
}

if (!function_exists('getCurrentLocale')) {
    /**
     * Get the current locale.
     *
     * @return string
     */
    function getCurrentLocale()
    {
        return App::getLocale();
    }

    if (!function_exists('getYears')) {
        function getYears() {
            return range(2000, 2050);
        }
    }    

    if (!function_exists('formatDateTime')) {
        function formatDateTime($dateTime) {
            return \Carbon\Carbon::parse($dateTime)->format('j M Y g:iA');
        }
    }    
}