<?php

return [
    // The number of entries to show per page in the listing
    'paginationLimit' => 12,

    // Site groups cannot be sorted in Craft, so we have to factor in a custom sort order
    // We can also skip site groups that we don't want to show
    // Localized names are handled by translations
    // This must match the site group names in Craft, otherwise errors will occur
    'sortedSiteGroups' => [
        'Munich',
        'Berlin',
        'Hamburg',
        'Soltau'
    ],

    // Language names for site switcher
    // site.locale.displayName is not suitable for the frontend (e.g. "German (Germany)")
    // Trying to add some logic to the template to handle this seems to be messy.
    // This must match the languages in Craft, otherwise errors will occur
    'languageNames' => [
        'de-DE' => 'Deutsch',
        'en-US' => 'English',
        'he-IL' => 'עברית',
        'it-IT' => 'Italiano',
        'ja-JP' => '日本語',
        'tr-TR' => 'Türkçe',
        'zh-Hans-CN' => '中文',
    ]
];
