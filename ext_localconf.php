<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SteinbauerIT.Cookieoptin',
            'Modal',
            [
                'CookieGroup' => 'index',
                'Frontend' => 'setSelectedCookies, setEssentialCookies, setAllCookies, revokeCookies'
            ],
            // non-cacheable actions
            [
                'CookieGroup' => 'index',
                'Frontend' => 'setSelectedCookies, setEssentialCookies, setAllCookies, revokeCookies'
            ]
        );

    }
);
