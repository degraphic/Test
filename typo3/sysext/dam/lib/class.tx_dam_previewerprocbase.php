<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2003-2006 Rene Fritz (r.fritz@colorcube.de)
*  All rights reserved
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
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Contains the previewer base class.
 * Part of the DAM (digital asset management) extension.
 *
 * @author	Rene Fritz <r.fritz@colorcube.de>
 * @package DAM-BeLib
 * @subpackage Lib
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   64: class tx_dam_previewerProcBase
 *   75:     function isValid($row, $size, $type, $conf=array())
 *   87:     function render($row, $size, $type, $conf=array())
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the script "update-class-index")
 *
 */



/**
 * Contains the previewer base class.
 * Part of the DAM (digital asset management) extension.
 *
 * Following previewer sizes and types are known by the DAM:
 *
 * '200'
 * Allowed is 200px width
 *
 * 'topright'
 * The previewer is placed in the top right corner. Which means it can be expand (eg. popups) to the lower left.
 *
 * @author	Rene Fritz <r.fritz@colorcube.de>
 * @package DAM-BeLib
 * @subpackage Lib
 */
class tx_dam_previewerProcBase {

	/**
	 * Returns true if this previewer is able to render a preview for the given file
	 *
	 * @param	array		$row Meta data array
	 * @param	integer		$size The maximum size of the previewer
	 * @param	string		$type The wanted previewer type
	 * @param	array		$conf Additional configuration values. Might be empty.
	 * @return	boolean		True if this is the right previewer for the file
	 */
	function isValid($row, $size, $type, $conf=array()) {
		return false;
	}
	/**
	 * Returns rendered previewer
	 *
	 * @param	array		$row Meta data array
	 * @param	integer		$size The maximum size of the previewer
	 * @param	string		$type The wanted previewer type
	 * @param	array		$conf Additional configuration values. Might be empty.
	 * @return	array		True if this is the right previewer for the file
	 */
	function render($row, $size, $type, $conf=array()) {
		return false;
	}
}




if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam/lib/class.tx_dam_previewerprocbase.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam/lib/class.tx_dam_previewerprocbase.php']);
}
?>