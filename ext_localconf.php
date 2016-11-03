<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'OsAmazonAffiliate.' . $_EXTKEY,
	'Product',
	array(
		'Products' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Products' => 'create, update, delete',
		
	)
);
