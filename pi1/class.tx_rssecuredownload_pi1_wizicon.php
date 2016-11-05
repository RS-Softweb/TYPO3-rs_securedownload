<?php
/**
 *  Copyright notice
 *
 *  (c) 2008-2016 Rene <typo3@rs-softweb.de>
 *  All rights reserved
 *
 *  You may not remove or change the name of the author above. See:
 *  http://www.gnu.org/licenses/gpl-faq.html#IWantCredit
 *
 *  This script is part of the Typo3 project. The Typo3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 */

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class that adds the wizard icon.
 *
 * @author	Rene <typo3@rs-softweb.de>
 * @package	TYPO3
 * @subpackage	tx_rssecuredownload
 */
class tx_rssecuredownload_pi1_wizicon {

	/**
	 * Processing the wizard items array
	 *
	 * @param	array		$wizardItems: The wizard items
	 * @return	Modified array with wizard items
	 * @access	public
	 */
	public function proc($wizardItems)	{
		$LL = $this->includeLocalLang();
		$wizardItems['plugins_tx_rssecuredownload_pi1'] = array(
			'icon'=>ExtensionManagementUtility::extRelPath('rs_securedownload').'pi1/ce_wiz.gif',
			'title'=>$GLOBALS['LANG']->getLLL('pi1_title', $LL),
			'description'=>$GLOBALS['LANG']->getLLL('pi1_plus_wiz_description', $LL),
			'params'=>'&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=rs_securedownload_pi1'
		);
		return $wizardItems;
	}

	/**
	 * Reads the [extDir]/locallang.xml and returns the $LOCAL_LANG array found in that file.
	 *
	 * @return	The array with language labels
	 */
	private function includeLocalLang()	{
		$llFile = ExtensionManagementUtility::extPath('rs_securedownload').'locallang.xml';
		$LOCAL_LANG =  GeneralUtility::readLLfile($llFile, $GLOBALS['LANG']->lang);
		return $LOCAL_LANG;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rs_securedownload/pi1/class.tx_rssecuredownload_pi1_wizicon.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rs_securedownload/pi1/class.tx_rssecuredownload_pi1_wizicon.php']);
}
?>