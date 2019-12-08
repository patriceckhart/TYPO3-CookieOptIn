<?php
namespace SteinbauerIT\Cookieoptin\Domain\Model;

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
 * CookieGroup
 */
class CookieGroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * essential
     *
     * @var bool
     */
    protected $essential = false;

    /**
     * cookies
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SteinbauerIT\Cookieoptin\Domain\Model\Cookie>
     */
    protected $cookies = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the essential
     *
     * @return bool $essential
     */
    public function getEssential()
    {
        return $this->essential;
    }

    /**
     * Sets the essential
     *
     * @param bool $essential
     * @return void
     */
    public function setEssential($essential)
    {
        $this->essential = $essential;
    }

    /**
     * Returns the boolean state of essential
     *
     * @return bool
     */
    public function isEssential()
    {
        return $this->essential;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->cookies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Cookie
     *
     * @param \SteinbauerIT\Cookieoptin\Domain\Model\Cookie $cooky
     * @return void
     */
    public function addCooky(\SteinbauerIT\Cookieoptin\Domain\Model\Cookie $cooky)
    {
        $this->cookies->attach($cooky);
    }

    /**
     * Removes a Cookie
     *
     * @param \SteinbauerIT\Cookieoptin\Domain\Model\Cookie $cookyToRemove The Cookie to be removed
     * @return void
     */
    public function removeCooky(\SteinbauerIT\Cookieoptin\Domain\Model\Cookie $cookyToRemove)
    {
        $this->cookies->detach($cookyToRemove);
    }

    /**
     * Returns the cookies
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SteinbauerIT\Cookieoptin\Domain\Model\Cookie> $cookies
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * Sets the cookies
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SteinbauerIT\Cookieoptin\Domain\Model\Cookie> $cookies
     * @return void
     */
    public function setCookies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cookies)
    {
        $this->cookies = $cookies;
    }
}
