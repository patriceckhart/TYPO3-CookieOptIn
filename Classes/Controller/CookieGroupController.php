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
 * CookieGroupController
 */
class CookieGroupController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cookieGroupRepository
     *
     * @var \SteinbauerIT\Cookieoptin\Domain\Repository\CookieGroupRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $cookieGroupRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function indexAction()
    {
        $cookieGroups = $this->cookieGroupRepository->findAll();
        $cookieName = 'SitCookieOptIn';
        if(isset($_COOKIE[$cookieName])) {
            // \TYPO3\CMS\Core\Utility\DebugUtility::debug($_COOKIE[$cookieName]);
            $cookieValue = $_COOKIE[$cookieName];
            $cookieGroupsArray = array();
            if($cookieValue=='essential') {
                foreach ($cookieGroups as $cookieGroup) {
                    $essential = $cookieGroup->getEssential();
                    if($essential==1) {
                        array_push($cookieGroupsArray, $cookieGroup);
                    }
                }
                $this->view->assign('cookieGroups', $cookieGroupsArray);
                // \TYPO3\CMS\Core\Utility\DebugUtility::debug($cookieGroupsArray);
            } else if($cookieValue=='all') {
                $this->view->assign('cookieGroups', $cookieGroups);
                // \TYPO3\CMS\Core\Utility\DebugUtility::debug($cookieGroups);
            } else if($cookieValue=='revoked') {
                $this->view->assign('cookieGroups', $cookieGroups);
                $this->view->assign('modal', 1);
                // \TYPO3\CMS\Core\Utility\DebugUtility::debug($cookieGroups);
            } else {
                $cookieValue = str_replace('%2C', ',', $cookieValue);
                $cookieGroupArray = explode(",", $cookieValue);
                $cookieGroupSelectedArray = array();
                foreach ($cookieGroupArray as $cookieGroup) {
                    $selectedCookieGroup = $this->cookieGroupRepository->findByUid(intval($cookieGroup));
                    array_push($cookieGroupSelectedArray, $selectedCookieGroup);
                }
                foreach ($cookieGroups as $cookieGroup) {
                    $essential = $cookieGroup->getEssential();
                    if($essential==1) {
                        array_push($cookieGroupSelectedArray, $cookieGroup);
                    }
                }
                $this->view->assign('cookieGroups', $cookieGroupSelectedArray);
                // \TYPO3\CMS\Core\Utility\DebugUtility::debug($cookieGroupSelectedArray);
            }
        } else {
            $this->view->assign('cookieGroups', $cookieGroups);
            $this->view->assign('modal', 1);
            // \TYPO3\CMS\Core\Utility\DebugUtility::debug($cookieGroups);
        }

        $header = $this->settings['header'];
        if(intval($header)==1) {
            $this->view->assign('header', intval($header));
            $revoke = $this->settings['revoke'];
            $this->view->assign('revoke', intval($revoke));
            // \TYPO3\CMS\Core\Utility\DebugUtility::debug($revoke);
        }

        $excludedPages = $this->settings['excludedPages'];
        if(isset($excludedPages)) {
            $pageId = $GLOBALS["TSFE"]->id;
            $excludedPages = explode(",", $excludedPages);
            // \TYPO3\CMS\Core\Utility\DebugUtility::debug($pageId);
            foreach ($excludedPages as $excludedPage) {
                if(intval($pageId)==intval($excludedPage)) {
                    $this->view->assign('modal', 0);
                }
            }
        }

        $impressPid = $this->settings['impressPid'];
        if(isset($impressPid)) {
            $this->view->assign('impressPid', intval($impressPid));
        }

        $dataPrivacyPid = $this->settings['dataPrivacyPid'];
        if(isset($dataPrivacyPid)) {
            $this->view->assign('dataPrivacyPid', intval($dataPrivacyPid));
        }

        $essentials = 0;
        foreach ($cookieGroups as $cookieGroup) {
            $essential = $cookieGroup->getEssential();
            if($essential==true) {
                $essentials = intval($essentials)+1;
            }
        }
        // \TYPO3\CMS\Core\Utility\DebugUtility::debug($essentials);
        $this->view->assign('essentials', $essentials);

    }

}
