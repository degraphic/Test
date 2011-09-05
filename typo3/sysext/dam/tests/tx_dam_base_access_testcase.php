<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005-2006 Rene Fritz (r.fritz@colorcube.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
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
 * @author	Rene Fritz <r.fritz@colorcube.de>
 */

require_once (PATH_txdam.'tests/class.tx_dam_testlib.php');


class tx_dam_base_access_testcase extends tx_dam_testlib {




	/***************************************
	 *
	 *	 access_
	 *
	 ***************************************/
	 
	/**
	 * tx_dam::access_checkPath()
	 */	 
	public function test_access_checkPath() {
		$GLOBALS['T3_VAR']['ext']['dam']['pathInfoCache'] = array();

		$filepath = $this->getFixtureFilename();
		$testpath = tx_dam::file_dirname($filepath);
		
			// path is cached so we need to use a different: 01/
		$access = tx_dam::access_checkPath ($testpath.'01/');
		self::assertFalse ($access, 'Path is accessable: '.$testpath.'01/');
		
		$access = tx_dam::access_checkPath (PATH_site.'fileadmin/');
		self::assertTrue ($access, 'Path not accessable: '.PATH_site.'fileadmin/');
		
		$access = tx_dam::access_checkPath (PATH_site.'fileadmin/zfhucnzushbfxcazu/');
		self::assertFalse ($access, 'Path is accessable: '.PATH_site.'fileadmin/zfhucnzushbfxcazu/');
		
		
		$this->addFixturePathToFilemount();
		
		$access = tx_dam::access_checkPath ($testpath);
		self::assertTrue ($access, 'Path not accessable: '.$testpath);
		
		$this->removeFixturePathFromFilemount();
	}
	
	/**
	 * tx_dam::access_checkFile()
	 */	 
	public function test_access_checkFile() {
		$GLOBALS['T3_VAR']['ext']['dam']['pathInfoCache'] = array();

		$filepath = $this->getFixtureFilename();
		
		$this->addFixturePathToFilemount();
		
		$access = tx_dam::access_checkFile ($filepath);
		self::assertTrue ($access, 'File not accessable: '.$filepath);
		
		$access = tx_dam::access_checkFile ($filepath.'xyz');
		self::assertFalse ($access, 'File accessable: '.$filepath.'xyz');
		
		
		$this->removeFixturePathFromFilemount();
	}
	
	/**
	 * tx_dam::access_checkFileOperation()
	 */	 
	public function test_access_checkFileOperation() {

		// todo: access_checkFileOperation
	}
	
	

}

//if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam/tests/tx_dam_base_access_testcase.php'])	{
//	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dam/tests/tx_dam_base_access_testcase.php']);
//}
?>