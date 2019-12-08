<?php
namespace SteinbauerIT\Cookieoptin\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Patric Eckhart <patric.eckhart@steinbauer-it.com>
 */
class CookieTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SteinbauerIT\Cookieoptin\Domain\Model\Cookie
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SteinbauerIT\Cookieoptin\Domain\Model\Cookie();
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
    public function getInheadReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInhead()
        );
    }

    /**
     * @test
     */
    public function setInheadForStringSetsInhead()
    {
        $this->subject->setInhead('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'inhead',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getInfooterReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInfooter()
        );
    }

    /**
     * @test
     */
    public function setInfooterForStringSetsInfooter()
    {
        $this->subject->setInfooter('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'infooter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLifetimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLifetime()
        );
    }

    /**
     * @test
     */
    public function setLifetimeForStringSetsLifetime()
    {
        $this->subject->setLifetime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lifetime',
            $this->subject
        );
    }
}
