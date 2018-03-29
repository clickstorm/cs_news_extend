<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extend news example',
    'description' => 'Example how to extend news records',
    'category' => 'example',
    'author' => 'Marc Hirdes',
    'author_email' => 'hirdes@clickstorm.de',
    'state' => 'test',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '7.6.13-8.7.99',
                    'news' => '6.0.0-6.99.99',
                ]
        ]
];