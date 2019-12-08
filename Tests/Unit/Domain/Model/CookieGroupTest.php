<?php
namespace SteinbauerIT\Cookieoptin\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Patric Eckhart <patric.eckhart@steinbauer-it.com>
 */
class CookieGroupTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SteinbauerIT\Cookieoptin\Domain\Model\CookieGroup
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SteinbauerIT\Cookieoptin\Domain\Model\CookieGroup();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEssentialReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getEssential()
        );
    }

    /**
     * @test
     */
    public function setEssentialForBoolSetsEssential()
    {
        $this->subject->setEssential(true);

        self::assertAttributeEquals(
            true,
            'essential',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCookiesReturnsInitialValueForCookie()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCookies()
        );
    }

    /**
     * @test
     */
    public function setCookiesForObjectStorageContainingCookieSetsCookies()
    {
        $cooky = new \SteinbauerIT\Cookieoptin\Domain\Model\Cookie();
        $objectStorageHoldingExactlyOneCookies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCookies->attach($cooky);
        $this->subject->setCookies($objectStorageHoldingExactlyOneCookies);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCookies,
            'cookies',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCookyToObjectStorageHoldingCookies()
    {
        $cooky = new \SteinbauerIT\Cookieoptin\Domain\Model\Cookie();
        $cookiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cookiesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($cooky));
        $this->inject($this->subject, 'cookies', $cookiesObjectStorageMock);

        $this->subject->addCooky($cooky);
    }

    /**
     * @test
     */
    public function removeCookyFromObjectStorageHoldingCookies()
    {
        $cooky = new \SteinbauerIT\Cookieoptin\Domain\Model\Cookie();
        $cookiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cookiesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($cooky));
        $this->inject($this->subject, 'cookies', $cookiesObjectStorageMock);

        $this->subject->removeCooky($cooky);
    }
}
