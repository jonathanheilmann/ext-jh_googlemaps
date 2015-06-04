<?php
namespace Heilmann\JhGooglemaps\Domain\Model;

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
 * Locations to display in Google Maps.
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Categories
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $categories = NULL;

	/**
	 * Title of location
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * Readable address of location
	 *
	 * @var string
	 */
	protected $address = '';

	/**
	 * Latitude,Lontitude
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $latLng = '';

	/**
	 * Teaser of location
	 *
	 * @var string
	 */
	protected $teaser = '';

	/**
	 * Description of location
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * Marker of location
	 *
	 * @var \Heilmann\JhGooglemaps\Domain\Model\Marker
	 */
	protected $marker = NULL;

	/**
	 * Postal Code used for sorting.
	 *
	 * @var integer
	 */
	protected $postalCode = 0;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the latLng
	 *
	 * @return string $latLng
	 */
	public function getLatLng() {
		return $this->latLng;
	}

	/**
	 * Sets the latLng
	 *
	 * @param string $latLng
	 * @return void
	 */
	public function setLatLng($latLng) {
		$this->latLng = $latLng;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Category
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $categories
	 * @return void
	 */
	public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * Returns the teaser
	 *
	 * @return string $teaser
	 */
	public function getTeaser() {
		return $this->teaser;
	}

	/**
	 * Sets the teaser
	 *
	 * @param string $teaser
	 * @return void
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
	}

	/**
	 * Returns the address
	 *
	 * @return string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the marker
	 *
	 * @return \Heilmann\JhGooglemaps\Domain\Model\Marker $marker
	 */
	public function getMarker() {
		return $this->marker;
	}

	/**
	 * Sets the marker
	 *
	 * @param \Heilmann\JhGooglemaps\Domain\Model\Marker $marker
	 * @return void
	 */
	public function setMarker(\Heilmann\JhGooglemaps\Domain\Model\Marker $marker) {
		$this->marker = $marker;
	}

	/**
	 * Returns the postalCode
	 *
	 * @return integer $postalCode
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * Sets the postalCode
	 *
	 * @param integer $postalCode
	 * @return void
	 */
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}

}