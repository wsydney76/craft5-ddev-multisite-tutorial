<?php

return [
    // The number of entries to show per page in the listing
    'paginationLimit' => 12,

    // Site groups cannot be sorted in Craft, so we have to factor in a custom sort order
    // We can also skip site groups that we don't want to show
    // Localized names are handled by translations
    // This must match the site group names in Craft, otherwise errors will occur
    'sortedSiteGroups' => [
        'Berlin',
        'Munich',
        'Hamburg',
        'Soltau'
    ]
];
