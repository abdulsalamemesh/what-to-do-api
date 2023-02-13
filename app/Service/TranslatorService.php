<?php

namespace App\Service;

use App\Models\Language;

class TranslatorService
{

    /**
     * returns the translations in all supported languages for the provided text
     *
     * @param string $text
     * @param string $from
     * @return array
     */
    public static function translate(string $text, string $from = 'en'): array
    {
        $translations = [];
        $translator = new \DeepL\Translator(env('DEEPL_API_KEY'));
        foreach (Language::KEYS as $supportedLanguage) {
            if ($supportedLanguage == $from) {
                $translations[$supportedLanguage] = $text;
                continue;
            }
            $translations[$supportedLanguage] = $translator->translateText($text, $from == 'en-US' ? 'en' : $from, $supportedLanguage,  ['formality' => 'prefer_less'])->text;
        }
        return $translations;
    }

}
