<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SteinbauerIT.Cookieoptin',
            'Modal',
            'Modal'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cookieoptin', 'Configuration/TypoScript', 'CookieOptIn');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cookieoptin_domain_model_cookiegroup', 'EXT:cookieoptin/Resources/Private/Language/locallang_csh_tx_cookieoptin_domain_model_cookiegroup.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cookieoptin_domain_model_cookiegroup');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cookieoptin_domain_model_cookie', 'EXT:cookieoptin/Resources/Private/Language/locallang_csh_tx_cookieoptin_domain_model_cookie.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cookieoptin_domain_model_cookie');

    }
);

$TCA['tx_cookieoptin_domain_model_cookie']['ctrl']['hideTable'] = 1;