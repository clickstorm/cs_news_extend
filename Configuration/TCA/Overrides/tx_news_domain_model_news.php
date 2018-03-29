<?php
defined('TYPO3_MODE') or die();

// define new fields
$tempColumns = [
    'tx_csnewsextend_location' => [
        'label' => 'LLL:EXT:cs_news_extend/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_csnewsextend_location',
        'exclude' => 1,
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ]
    ]
];

// add fields to TCA - not rendered in TYPO3 yet!
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);

// add fields to new palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'tx_csnewsextend_fields',
    'tx_csnewsextend_location'
);

// add new palette to tag after title - now the field is displayed in the backend
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--palette--;LLL:EXT:cs_news_extend/Resources/Private/Language/locallang_db.xlf:palette.tx_csnewsextend_fields;tx_csnewsextend_fields',
    '',
    'after:title'
);