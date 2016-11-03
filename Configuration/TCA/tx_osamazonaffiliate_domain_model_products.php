<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,ansi,price,description,date,image,rate,taxe,affiliate_link,affiliate_button_text,intern_link,intern_button_text,all_review,single_review,date_review,recommendation,aktive,category,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('os_amazon_affiliate') . 'Resources/Public/Icons/tx_osamazonaffiliate_domain_model_products.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, ansi, price, description, date, image, rate, taxe, affiliate_link, affiliate_button_text, intern_link, intern_button_text, all_review, single_review, date_review, recommendation, aktive, category',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, ansi, price, description, date, image, rate, taxe, affiliate_link, affiliate_button_text, intern_link, intern_button_text, all_review, single_review, date_review, recommendation, aktive, category, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_osamazonaffiliate_domain_model_products',
				'foreign_table_where' => 'AND tx_osamazonaffiliate_domain_model_products.pid=###CURRENT_PID### AND tx_osamazonaffiliate_domain_model_products.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansi' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.ansi',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
					'maxitems' => 1
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'rate' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.rate',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'taxe' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.taxe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'affiliate_link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.affiliate_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'affiliate_button_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.affiliate_button_text',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'intern_link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.intern_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'intern_button_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.intern_button_text',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'all_review' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.all_review',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'single_review' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.single_review',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date_review' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.date_review',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'recommendation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.recommendation',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'aktive' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.aktive',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'category' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:os_amazon_affiliate/Resources/Private/Language/locallang_db.xlf:tx_osamazonaffiliate_domain_model_products.category',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);