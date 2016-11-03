<?php
namespace OsAmazonAffiliate\OsAmazonAffiliate\Controller;

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
 * ProductsController
 */
class ProductsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productsRepository
     *
     * @var \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Repository\ProductsRepository
     * @inject
     */
    protected $productsRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        if ($this->settings["category"] == "Dartautomaten") {
            $products = $this->productsRepository->findByCategory("Dartautomaten");
        }
        else if ($this->settings["category"] == "Dartpfeile") {
            $products = $this->productsRepository->findByCategory("Dartpfeile");
        }
        else {
            $products = $this->productsRepository->findByAnsi($this->settings["ansi"])->toArray();
        }
        /*else {
            $products = $this->productsRepository->findAll();
        }*/

        $this->view->assign('products', $products);
        $this->view->assign('settings', $this->settings);

        //$products = $this->productsRepository->findAll();
        //$this->view->assign('products', $products);
    }

    /**
     * action show
     *
     * @param \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products
     * @return void
     */
    public function showAction(\OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products)
    {
        $this->view->assign('products', $products);
        $this->view->assign('settings', $this->settings);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $newProducts
     * @return void
     */
    public function createAction(\OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $newProducts)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productsRepository->add($newProducts);
        $this->view->assign('settings', $this->settings);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products
     * @ignorevalidation $products
     * @return void
     */
    public function editAction(\OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products)
    {
        $this->view->assign('products', $products);
        $this->view->assign('settings', $this->settings);
    }

    /**
     * action update
     *
     * @param \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products
     * @return void
     */
    public function updateAction(\OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productsRepository->update($products);
        $this->view->assign('settings', $this->settings);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products
     * @return void
     */
    public function deleteAction(\OsAmazonAffiliate\OsAmazonAffiliate\Domain\Model\Products $products)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productsRepository->remove($products);
        $this->view->assign('settings', $this->settings);
        $this->redirect('list');
    }

}
