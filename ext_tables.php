<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$TCA['tx_rssecuredownload_codes'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes',
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => ExtensionManagementUtility::extPath($_EXTKEY).'tca.php',
		'iconfile'          => ExtensionManagementUtility::extRelPath($_EXTKEY).'icon_tx_rssecuredownload_codes.gif',
	),
	'feInterface' => array (
		'fe_admin_fieldList' => 'hidden, starttime, endtime, title, description, codeprompt, code, file',
	)
);

if (TYPO3_MODE == 'BE')	{
	ExtensionManagementUtility::addModule('web', 'txrssecuredownloadM1', '', ExtensionManagementUtility::extPath($_EXTKEY).'mod1/');
}

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key,pages,starttime,endtime';
// you add pi_flexform to be renderd when your plugin is shown
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1']='pi_flexform';

ExtensionManagementUtility::addPlugin(array('LLL:EXT:rs_securedownload/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'), 'list_type');

ExtensionManagementUtility::addStaticFile($_EXTKEY, 'pi1/static/', 'Secure Download');

ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY.'_pi1', 'FILE:EXT:rs_securedownload/flexform_ds_pi1.xml');

if (TYPO3_MODE=='BE')	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_rssecuredownload_pi1_wizicon'] = ExtensionManagementUtility::extPath($_EXTKEY).'pi1/class.tx_rssecuredownload_pi1_wizicon.php';
?>