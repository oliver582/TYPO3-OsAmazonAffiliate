<?php
namespace OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Oliver Seiffert <support@oliver-seiffert.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Products
 */
class Products extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * ansi
     *
     * @var string
     */
    protected $ansi = '';
    
    /**
     * price
     *
     * @var string
     */
    protected $price = 0;
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * rate
     *
     * @var string
     */
    protected $rate = '';
    
    /**
     * taxe
     *
     * @var string
     */
    protected $taxe = '';
    
    /**
     * affiliateLink
     *
     * @var string
     */
    protected $affiliateLink = null;
    
    /**
     * affiliateButtonText
     *
     * @var string
     */
    protected $affiliateButtonText = '';
    
    /**
     * internLink
     *
     * @var string
     */
    protected $internLink = '';
    
    /**
     * internButtonText
     *
     * @var string
     */
    protected $internButtonText = '';
    
    /**
     * allReview
     *
     * @var string
     */
    protected $allReview = '';
    
    /**
     * singleReview
     *
     * @var string
     */
    protected $singleReview = '';
    
    /**
     * dateReview
     *
     * @var string
     */
    protected $dateReview = '';
    
    /**
     * recommendation
     *
     * @var string
     */
    protected $recommendation = '';
    
    /**
     * aktive
     *
     * @var bool
     */
    protected $aktive = false;
    
    /**
     * category
     *
     * @var string
     */
    protected $category = '';
    
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
     * Returns the ansi
     *
     * @return string $ansi
     */
    public function getAnsi()
    {
        return $this->ansi;
    }
    
    /**
     * Sets the ansi
     *
     * @param string $ansi
     * @return void
     */
    public function setAnsi($ansi)
    {
        $this->ansi = $ansi;
    }
    
    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
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
        
    }
    
    /**
     * Returns the rate
     *
     * @return string $rate
     */
    public function getRate()
    {
        return $this->rate;
    }
    
    /**
     * Sets the rate
     *
     * @param string $rate
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
    
    /**
     * Returns the taxe
     *
     * @return string $taxe
     */
    public function getTaxe()
    {
        return $this->taxe;
    }
    
    /**
     * Sets the taxe
     *
     * @param string $taxe
     * @return void
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;
    }
    
    /**
     * Returns the affiliateButtonText
     *
     * @return string $affiliateButtonText
     */
    public function getAffiliateButtonText()
    {
        return $this->affiliateButtonText;
    }
    
    /**
     * Sets the affiliateButtonText
     *
     * @param string $affiliateButtonText
     * @return void
     */
    public function setAffiliateButtonText($affiliateButtonText)
    {
        $this->affiliateButtonText = $affiliateButtonText;
    }
    
    /**
     * Returns the internLink
     *
     * @return string $internLink
     */
    public function getInternLink()
    {
        return $this->internLink;
    }
    
    /**
     * Sets the internLink
     *
     * @param string $internLink
     * @return void
     */
    public function setInternLink($internLink)
    {
        $this->internLink = $internLink;
    }
    
    /**
     * Returns the internButtonText
     *
     * @return string $internButtonText
     */
    public function getInternButtonText()
    {
        return $this->internButtonText;
    }
    
    /**
     * Sets the internButtonText
     *
     * @param string $internButtonText
     * @return void
     */
    public function setInternButtonText($internButtonText)
    {
        $this->internButtonText = $internButtonText;
    }
    
    /**
     * Returns the allReview
     *
     * @return string $allReview
     */
    public function getAllReview()
    {
        return $this->allReview;
    }
    
    /**
     * Sets the allReview
     *
     * @param string $allReview
     * @return void
     */
    public function setAllReview($allReview)
    {
        $this->allReview = $allReview;
    }
    
    /**
     * Returns the singleReview
     *
     * @return string $singleReview
     */
    public function getSingleReview()
    {
        return $this->singleReview;
    }
    
    /**
     * Sets the singleReview
     *
     * @param string $singleReview
     * @return void
     */
    public function setSingleReview($singleReview)
    {
        $this->singleReview = $singleReview;
    }
    
    /**
     * Returns the dateReview
     *
     * @return string $dateReview
     */
    public function getDateReview()
    {
        return $this->dateReview;
    }
    
    /**
     * Sets the dateReview
     *
     * @param string $dateReview
     * @return void
     */
    public function setDateReview($dateReview)
    {
        $this->dateReview = $dateReview;
    }
    
    /**
     * Returns the recommendation
     *
     * @return string $recommendation
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }
    
    /**
     * Sets the recommendation
     *
     * @param string $recommendation
     * @return void
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;
    }
    
    /**
     * Returns the aktive
     *
     * @return bool $aktive
     */
    public function getAktive()
    {
        return $this->aktive;
    }
    
    /**
     * Sets the aktive
     *
     * @param bool $aktive
     * @return void
     */
    public function setAktive($aktive)
    {
        $this->aktive = $aktive;
    }
    
    /**
     * Returns the boolean state of aktive
     *
     * @return bool
     */
    public function isAktive()
    {
        return $this->aktive;
    }
    
    /**
     * Returns the price
     *
     * @return string price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param int $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Returns the affiliateLink
     *
     * @return string affiliateLink
     */
    public function getAffiliateLink()
    {
        return $this->affiliateLink;
    }
    
    /**
     * Sets the affiliateLink
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $affiliateLink
     * @return void
     */
    public function setAffiliateLink(\TYPO3\CMS\Extbase\Domain\Model\FileReference $affiliateLink)
    {
        $this->affiliateLink = $affiliateLink;
    }
    
    /**
     * Returns the category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}