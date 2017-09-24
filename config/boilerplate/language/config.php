<?php

use Modules\Language\Entities\Languages\Language;
use Modules\Language\Entities\Translations\Translation;

return [
    'name' => 'Language',

    'languages_table' => 'language__languages',
    'languages_translations_table' => 'language__language_translations',

    'language' => Language::class,

    'translations_table'              => 'language__translations',
    'translations_translations_table' => 'language__translation_translations',

    'translation' => Translation::class,
];
