<?php

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