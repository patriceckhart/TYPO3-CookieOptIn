<?php
namespace SteinbauerIT\Cookieoptin\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Patric Eckhart <patric.eckhart@steinbauer-it.com>
 */
class CookieControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SteinbauerIT\Cookieoptin\Controller\CookieController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SteinbauerIT\Cookieoptin\Controller\CookieController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCookiesFromRepositoryAndAssignsThemToView()
    {

        $allCookies = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cookieRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cookieRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCookies));
        $this->inject($this->subject, 'cookieRepository', $cookieRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cookies', $allCookies);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCookieToView()
    {
        $cookie = new \SteinbauerIT\Cookieoptin\Domain\Model\Cookie();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cookie', $cookie);

        $this->subject->showAction($cookie);
    }
}
