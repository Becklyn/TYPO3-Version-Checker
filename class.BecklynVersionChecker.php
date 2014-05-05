<?php
require_once(PATH_tslib.'class.tslib_pibase.php');

class BecklynVersionChecker extends tslib_pibase {
    /**
     * Outputs system and version number of TYPO3
     *
     */
    function main()
    {
        // prevents that the extension will be cached
        $this->pi_USER_INT_obj = 1;
        header('Cache-Control: no-cache, must-revalidate');
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header('Pragma: no-cache');

        echo json_encode(
            array(
                'system' => "typo3",
                'version' => $GLOBALS['TYPO_VERSION']
            )
        );
    }
}

$output = t3lib_div::makeInstance('BecklynVersionChecker');
$output->main();