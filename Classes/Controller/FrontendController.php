<?php
namespace SteinbauerIT\Cookieoptin\Controller;

/***
 *
 * This file is part of the "CookieOptIn" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Patric Eckhart <patric.eckhart@steinbauer-it.com>, STEINBAUER IT
 *
 ***/

/**
 * FrontendController
 */
class FrontendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action setSelectedCookies
     *
     * @return void
     */
    public function setSelectedCookiesAction()
    {
        $cookieGroupArray = $this->request->getArgument('cookieGroupArray');
        $cookieName = 'SitCookieOptIn';
        if($cookieGroupArray) {
            $cookieValue = $cookieGroupArray;
        } else {
            $cookieValue = 'essential';
        }
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
        $this->redirectToUri($_SERVER['HTTP_REFERER']);
    }

    /**
     * action setEssentialCookies
     *
     * @return void
     */
    public function setEssentialCookiesAction()
    {
        $cookieName = 'SitCookieOptIn';
        $cookieValue = 'essential';
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
        $this->redirectToUri($_SERVER['HTTP_REFERER']);
    }

    /**
     * action setAll
     *
     * @return void
     */
    public function setAllCookiesAction()
    {
        $cookieName = 'SitCookieOptIn';
        $cookieValue = 'all';
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
        $this->redirectToUri($_SERVER['HTTP_REFERER']);
    }

    /**
     * action revokeCookies
     *
     * @return void
     */
    public function revokeCookiesAction()
    {
        $cookieName = 'SitCookieOptIn';
        $cookieValue = 'revoked';
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
        $this->redirectToUri($_SERVER['HTTP_REFERER']);
    }

}
