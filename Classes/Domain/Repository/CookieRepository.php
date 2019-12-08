<?php
namespace SteinbauerIT\Cookieoptin\Domain\Repository;

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
 * The repository for Cookie
 */
class CookieRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];
    
}
