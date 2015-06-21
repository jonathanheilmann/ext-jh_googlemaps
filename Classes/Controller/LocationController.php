<?php
namespace Heilmann\JhGooglemaps\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Jonathan Heilmann <mail@jonathan-heilmann.de>
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
 * LocationController
 */
class LocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * locationRepository
	 *
	 * @var \Heilmann\JhGooglemaps\Domain\Repository\LocationRepository
	 * @inject
	 */
	protected $locationRepository = NULL;

	/**
	 * categoryRepository
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
	 * @inject
	 */
	protected $categoryRepository = NULL;

	/**
	 * Injects the configuration manager, retrieves the plugin settings from it, saves
	 * the plugin settings in $this->settings, merges / overrides the Typoscript settings
	 * with FlexForm settings and saves the result in $this->settings['merged']
	 *
	 * @param \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface $configurationManager
	 * @override \TYPO3\CMS\Extbase\Mvc\Controller\AbstractController
	 * @return void
	 */
	public function injectConfigurationManager(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface $configurationManager) {
		$this->configurationManager = $configurationManager;
		$settings = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);
		if (isset($settings['flexform']) && is_array($settings['flexform'])) {
			$overrides = $settings['flexform'];
			unset($settings['flexform']);
			$settings['merged'] = array_merge($settings, $overrides);
		}
		$this->settings = $settings;
	}

	/**
	 * action list
	 *
	 * @param \Heilmann\JhGooglemaps\Domain\Model\Location $selectedLocation
	 * @return void
	 */
	public function listAction(\Heilmann\JhGooglemaps\Domain\Model\Location $selectedLocation = NULL) {
		//set orderings of location repository
		if ($this->request->hasArgument('orderings')) {
			$orderings = $this->request->getArgument('orderings');
			$direction = $this->request->hasArgument('direction') && strtoupper($this->request->getArgument('direction')) == 'DESC' ? QueryInterface::ORDER_DESCENDING : QueryInterface::ORDER_ASCENDING;
			$this->locationRepository->setDefaultOrderings(array($orderings => $direction));
		}
		$this->view->assign('orderings', $orderings);
		$this->view->assign('direction', $direction);
		
		//orderings advice
		$orderingsAdvice = $this->locationRepository->getDefaultOrderings();
		$this->view->assign('orderingsAdvice', $orderingsAdvice);
		
		$categoryUids = GeneralUtility::trimExplode(',', $this->settings['categoriesList'], TRUE);
		$categories = array();
		foreach ($categoryUids as $uid) {
			$categories[] = $this->categoryRepository->findByUid($uid);
		}
		$locations = $this->locationRepository->findWithCategories($categories);
		if (count($locations) == 0) {
			$this->addFlashMessage(LocalizationUtility::translate('map.noLocations', $this->extensionName), '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR, TRUE);
		}
		$this->view->assign('locations', $locations);
		//TODO: get selected location from url (permalink-enabled)
		if ($selectedLocation != NULL) {
			$this->view->assign('selectedLocation', $selectedLocation);
		}
	}

	/**
	 * action show
	 *
	 * @param \Heilmann\JhGooglemaps\Domain\Model\Location $location
	 * @return void
	 */
	public function showAction(\Heilmann\JhGooglemaps\Domain\Model\Location $location) {
		$this->view->assign('location', $location);
	}

	/**
	 * action map
	 *
	 * @param \Heilmann\JhGooglemaps\Domain\Model\Location $selectedLocation
	 * @return void
	 */
	public function mapAction(\Heilmann\JhGooglemaps\Domain\Model\Location $selectedLocation = NULL) {
		$categoryUids = GeneralUtility::trimExplode(',', $this->settings['categoriesList'], TRUE);
		$categories = array();
		foreach ($categoryUids as $uid) {
			$categories[] = $this->categoryRepository->findByUid($uid);
		}
		$locations = $this->locationRepository->findWithCategories($categories);
		if (count($locations) == 0) {
			$this->addFlashMessage(LocalizationUtility::translate('map.noLocations', $this->extensionName), '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR, TRUE);
		}
		$this->view->assign('locations', $locations);
		if ($selectedLocation != NULL) {
			$this->view->assign('selectedLocation', $selectedLocation);
		}
	}

}