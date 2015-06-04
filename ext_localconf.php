<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Heilmann.' . $_EXTKEY,
	'Map',
	array(
		'Location' => 'map, show, list',
		
	),
	// non-cacheable actions
	array(
		'Location' => '',
		
	)
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder