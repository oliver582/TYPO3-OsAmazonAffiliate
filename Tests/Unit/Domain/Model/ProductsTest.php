<?php

namespace OsAmazonAffiliate\OsAmazonAffiliate\Tests\Unit\Domain\Model;

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
 * Test case for class \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Oliver Seiffert <support@oliver-seiffert.de>
 */
class ProductsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
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

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAnsiReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAnsi()
		);
	}

	/**
	 * @test
	 */
	public function setAnsiForStringSetsAnsi()
	{
		$this->subject->setAnsi('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ansi',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForStringSetsPrice()
	{
		$this->subject->setPrice('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'price',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
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

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDate()
		);
	}

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRateReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRate()
		);
	}

	/**
	 * @test
	 */
	public function setRateForStringSetsRate()
	{
		$this->subject->setRate('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'rate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTaxeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTaxe()
		);
	}

	/**
	 * @test
	 */
	public function setTaxeForStringSetsTaxe()
	{
		$this->subject->setTaxe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'taxe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAffiliateLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAffiliateLink()
		);
	}

	/**
	 * @test
	 */
	public function setAffiliateLinkForStringSetsAffiliateLink()
	{
		$this->subject->setAffiliateLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'affiliateLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAffiliateButtonTextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAffiliateButtonText()
		);
	}

	/**
	 * @test
	 */
	public function setAffiliateButtonTextForStringSetsAffiliateButtonText()
	{
		$this->subject->setAffiliateButtonText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'affiliateButtonText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInternLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getInternLink()
		);
	}

	/**
	 * @test
	 */
	public function setInternLinkForStringSetsInternLink()
	{
		$this->subject->setInternLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'internLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInternButtonTextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getInternButtonText()
		);
	}

	/**
	 * @test
	 */
	public function setInternButtonTextForStringSetsInternButtonText()
	{
		$this->subject->setInternButtonText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'internButtonText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAllReviewReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAllReview()
		);
	}

	/**
	 * @test
	 */
	public function setAllReviewForStringSetsAllReview()
	{
		$this->subject->setAllReview('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'allReview',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSingleReviewReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSingleReview()
		);
	}

	/**
	 * @test
	 */
	public function setSingleReviewForStringSetsSingleReview()
	{
		$this->subject->setSingleReview('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'singleReview',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateReviewReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDateReview()
		);
	}

	/**
	 * @test
	 */
	public function setDateReviewForStringSetsDateReview()
	{
		$this->subject->setDateReview('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dateReview',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRecommendationReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRecommendation()
		);
	}

	/**
	 * @test
	 */
	public function setRecommendationForStringSetsRecommendation()
	{
		$this->subject->setRecommendation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'recommendation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAktiveReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getAktive()
		);
	}

	/**
	 * @test
	 */
	public function setAktiveForBoolSetsAktive()
	{
		$this->subject->setAktive(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'aktive',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForStringSetsCategory()
	{
		$this->subject->setCategory('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'category',
			$this->subject
		);
	}
}
