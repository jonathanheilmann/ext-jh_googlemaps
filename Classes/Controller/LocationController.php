<?php
namespace Heilmann\JhGooglemaps\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
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
		//$locations = $this->locationRepository->findAll();
		//$this->view->assign('locations', $locations);
		$categoryUids = GeneralUtility::trimExplode(',', $this->settings['categoriesList'], TRUE);
		$categories = array();
		foreach ($categoryUids as $uid) {
			$categories[] = $this->categoryRepository->findByUid($uid);
		}
		$locations = $this->locationRepository->findWithCategories($categories);
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
		$this->view->assign('locations', $locations);
		if ($selectedLocation != NULL) {
			$this->view->assign('selectedLocation', $selectedLocation);
		}
	}

}