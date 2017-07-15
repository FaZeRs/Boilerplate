<?php

use Modules\Language\Entities\Translations\Translation;

return [
    'name' => 'Language',

    'languages_table' => 'languages',

    'translations_table'              => 'translation__translations',
    'translations_translations_table' => 'translation__translation_translations',

    'translation_model' => Translation::class,
];
