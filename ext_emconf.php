<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "dorftv"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Dorftv Online Media Service',
    'description' => 'Online media provider for dorftv.at.',
    'category' => 'misc',
    'author' => 'till busch',
    'author_email' => 'buxit@bux.at',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
