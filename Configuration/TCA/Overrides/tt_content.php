<?php
defined('TYPO3_MODE') or die();


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['rs_securedownload_pi1']=
    'layout,select_key,pages,starttime,endtime';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['rs_securedownload_pi1']=
    'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'rs_securedownload_pi1',
    'FILE:EXT:rs_securedownload/Configuration/FlexForms/flexform_ds_pi1.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:rs_securedownload/Resources/Private/Language/locallang_db.xml:tt_content.list_type_pi1',
        'rs_securedownload_pi1'
    ],
    'list_type',
    'rs_securedownload'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rs_securedownload',
    'Configuration/TypoScript/',
    'Secure Download'
);

