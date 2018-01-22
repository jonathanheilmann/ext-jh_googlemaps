<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Add an extra categories selection field to the pages table
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'jh_googlemaps',
    'tx_jhgooglemaps_domain_model_location'
);