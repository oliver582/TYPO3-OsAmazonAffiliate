<?php
namespace OsAmazonAffiliate\OsAmazonAffiliate\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Oliver Seiffert <support@oliver-seiffert.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class OsAmazonAffiliate\OsAmazonAffiliate\Controller\CategoriesController.
 *
 * @author Oliver Seiffert <support@oliver-seiffert.de>
 */
class CategoriesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \OsAmazonAffiliate\OsAmazonAffiliate\Controller\CategoriesController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('OsAmazonAffiliate\\OsAmazonAffiliate\\Controller\\CategoriesController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllCategoriessFromRepositoryAndAssignsThemToView()
	{

		$allCategoriess = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$categoriesRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$categoriesRepository->expects($this->once())->method('findAll')->will($this->returnValue($allCategoriess));
		$this->inject($this->subject, 'categoriesRepository', $categoriesRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('categoriess', $allCategoriess);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenCategoriesToView()
	{
		$categories = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Categories();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('categories', $categories);

		$this->subject->showAction($categories);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenCategoriesToCategoriesRepository()
	{
		$categories = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Categories();

		$categoriesRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$categoriesRepository->expects($this->once())->method('add')->with($categories);
		$this->inject($this->subject, 'categoriesRepository', $categoriesRepository);

		$this->subject->createAction($categories);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenCategoriesToView()
	{
		$categories = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Categories();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('categories', $categories);

		$this->subject->editAction($categories);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenCategoriesInCategoriesRepository()
	{
		$categories = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Categories();

		$categoriesRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$categoriesRepository->expects($this->once())->method('update')->with($categories);
		$this->inject($this->subject, 'categoriesRepository', $categoriesRepository);

		$this->subject->updateAction($categories);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenCategoriesFromCategoriesRepository()
	{
		$categories = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Categories();

		$categoriesRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$categoriesRepository->expects($this->once())->method('remove')->with($categories);
		$this->inject($this->subject, 'categoriesRepository', $categoriesRepository);

		$this->subject->deleteAction($categories);
	}
}
