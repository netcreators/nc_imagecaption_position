<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Content Image: Caption Alignment (Default/Center/Right/Left)',
    'description' => 'Re-adds the Text & Image content element field "Caption Alignment" for css_styled_content.',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Leonie Philine Bitto',
    'author_email' => 'leonie@netcreators.nl',
    'author_company' => 'Netcreators',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
