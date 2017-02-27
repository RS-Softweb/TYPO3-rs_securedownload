<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rssecuredownload_codes');

#if (TYPO3_MODE == 'BE') {
#    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
#        'web',
#        'txrssecuredownloadM1',
#        '',
#        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
#    );
#}


