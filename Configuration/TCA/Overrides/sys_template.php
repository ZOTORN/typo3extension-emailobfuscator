<?php

defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function () {
    ExtensionManagementUtility::addStaticFile('emailobfuscator', 'Configuration/TypoScript', 'Emailobfuscator');
});


