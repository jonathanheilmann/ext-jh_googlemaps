<?php
namespace Heilmann\JhGooglemaps\Domain\Repository;

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
 * The repository for Locations
 */
class LocationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * defaultOrderings
	 *
	 * @var array
	 */
	protected $defaultOrderings = array(
		'postal_code' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	/**
	 * get defaultOrderings
	 *
	 * @return array
	 */
	public function getDefaultOrderings() {
		return $this->defaultOrderings;
	}

	/**
	 * Find location with categories
	 *
	 * @param array $categories
	 * @return TYPO3\CMS\Extbase\Persistence\Generic\QueryResult
	 */
	public function findWithCategories($categories) {
		$query = $this->createQuery();
		$constraint = array();
		foreach ($categories as $category) {
			$constraint[] = $query->contains('categories', $category);
		}
		$query->matching(
			$query->logicalOr($constraint)
		);
		return $query->execute();
	}

}