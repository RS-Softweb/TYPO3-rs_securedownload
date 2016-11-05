<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Extending TypoScript from static template uid=43 to set up userdefined tag:
ExtensionManagementUtility::addTypoScript($_EXTKEY, 'editorcfg', 
	'tt_content.CSS_editor.ch.tx_rssecuredownload_pi1 = < plugin.tx_rssecuredownload_pi1.CSS_editor', 43);

ExtensionManagementUtility::addPItoST43($_EXTKEY, 'pi1/class.tx_rssecuredownload_pi1.php', '_pi1', 'list_type', 0);

ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '
	tt_content.shortcut.20.0.conf.tx_rssecuredownload_codes = < plugin.'.ExtensionManagementUtility::getCN($_EXTKEY).'_pi1
	tt_content.shortcut.20.0.conf.tx_rssecuredownload_codes.CMD = singleView
', 43);
?>