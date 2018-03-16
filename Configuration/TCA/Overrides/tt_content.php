<?php
defined('TYPO3_MODE') or die();

// Extra fields for the tt_content table
$extraContentColumns = array(
    'imagecaption_position' => array(
        'exclude' => true,
        'label' => 'LLL:EXT:nc_imagecaption_position/Resources/Private/Language/locallang_ttc.xlf:imagecaption_position_formlabel',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array(
                    'LLL:EXT:nc_imagecaption_position/Resources/Private/Language/locallang.xlf:LGL.default_value',
                    ''
                ),
                array(
                    'LLL:EXT:nc_imagecaption_position/Resources/Private/Language/locallang_ttc.xlf:imagecaption_position.I.1',
                    'center'
                ),
                array(
                    'LLL:EXT:nc_imagecaption_position/Resources/Private/Language/locallang_ttc.xlf:imagecaption_position.I.2',
                    'right'
                ),
                array(
                    'LLL:EXT:nc_imagecaption_position/Resources/Private/Language/locallang_ttc.xlf:imagecaption_position.I.3',
                    'left'
                )
            ),
            'default' => ''
        )
    ),
);

// Adding fields to the tt_content table definition in TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $extraContentColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'gallerySettings', 'imagecaption_position');