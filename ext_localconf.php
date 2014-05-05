<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if(!isset($GLOBALS['TYPO3_VERSION'])) {
	// TYPO3 Version 4.5.x
    if(class_exists('t3lib_utility_VersionNumber')) { 
        $GLOBALS['TYPO3_VERSION'] = t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version);
    } // TYPO3 Version 6.1.x
    elseif(class_exists(\TYPO3\CMS\Core\Utility\VersionNumberUtility)) {
        $GLOBALS['TYPO3_VERSION'] = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
    } // TYPO3 Version 4.5.x 
    else { 
        $GLOBALS['TYPO3_VERSION'] = t3lib_div::int_from_ver(TYPO3_version);
    }
}

$TYPO3_CONF_VARS['FE']['eID_include']['becklynversionchecker'] = 'EXT:becklyn_version_checker/class.BecklynVersionChecker.php';