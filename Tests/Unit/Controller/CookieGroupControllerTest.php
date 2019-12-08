<?php
namespace SteinbauerIT\Cookieoptin\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Patric Eckhart <patric.eckhart@steinbauer-it.com>
 */
class CookieGroupControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SteinbauerIT\Cookieoptin\Controller\CookieGroupController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SteinbauerIT\Cookieoptin\Controller\CookieGroupController::class)
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
    public function listActionFetchesAllCookieGroupsFromRepositoryAndAssignsThemToView()
    {

        $allCookieGroups = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cookieGroupRepository = $this->getMockBuilder(\SteinbauerIT\Cookieoptin\Domain\Repository\CookieGroupRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cookieGroupRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCookieGroups));
        $this->inject($this->subject, 'cookieGroupRepository', $cookieGroupRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cookieGroups', $allCookieGroups);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCookieGroupToView()
    {
        $cookieGroup = new \SteinbauerIT\Cookieoptin\Domain\Model\CookieGroup();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cookieGroup', $cookieGroup);

        $this->subject->showAction($cookieGroup);
    }
}
