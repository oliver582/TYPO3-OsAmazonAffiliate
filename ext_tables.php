<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'OsAmazonAffiliate.' . $_EXTKEY,
	'Product',
	'Amazon Product'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'OsAmazonAffiliate.' . $_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'product',	// Submodule key
		'',						// Position
		array(
			'Products' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.svg',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_product.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'OS Amazon Affiliate');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_osamazonaffiliate_domain_model_products', 'EXT:os_amazon_affiliate/Resources/Private/Language/locallang_csh_tx_osamazonaffiliate_domain_model_products.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_osamazonaffiliate_domain_model_products');


/**
 * FlexForm Configuration for Plugin [Products-...]
 */
$extensionName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));
$pluginName = strtolower('Product');
$pluginSignature = $extensionName.'_'.$pluginName;

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY . '/Configuration/FlexForms/ProductViews.xml');
