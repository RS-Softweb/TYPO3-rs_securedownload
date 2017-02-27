<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'pi1/class.tx_rssecuredownload_pi1.php',
    '_pi1',
    'list_type',
    0
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    $_EXTKEY,
    'setup', '
	tt_content.shortcut.20.0.conf.tx_rssecuredownload_codes = < plugin.' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getCN($_EXTKEY) . '_pi1
	tt_content.shortcut.20.0.conf.tx_rssecuredownload_codes.CMD = singleView
    ',
    43
);
