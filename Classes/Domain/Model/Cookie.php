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
 * Cookie
 */
class Cookie extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * inhead
     *
     * @var string
     */
    protected $inhead = '';

    /**
     * infooter
     *
     * @var string
     */
    protected $infooter = '';

    /**
     * lifetime
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $lifetime = '';

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
     * Returns the inhead
     *
     * @return string $inhead
     */
    public function getInhead()
    {
        return $this->inhead;
    }

    /**
     * Sets the inhead
     *
     * @param string $inhead
     * @return void
     */
    public function setInhead($inhead)
    {
        $this->inhead = $inhead;
    }

    /**
     * Returns the infooter
     *
     * @return string $infooter
     */
    public function getInfooter()
    {
        return $this->infooter;
    }

    /**
     * Sets the infooter
     *
     * @param string $infooter
     * @return void
     */
    public function setInfooter($infooter)
    {
        $this->infooter = $infooter;
    }

    /**
     * Returns the lifetime
     *
     * @return string $lifetime
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * Sets the lifetime
     *
     * @param string $lifetime
     * @return void
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;
    }
}
