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
	 * Optional additional notation for address
	 *
	 * @var string
	 */
	protected $additionalNotation = '';

	/**
	 * Street
	 *
	 * @var string
	 */
	protected $street = '';

	/**
	 * Street number
	 *
	 * @var string
	 */
	protected $streetNumber = '';

	/**
	 * Postal code
	 *
	 * @var string
	 */
	protected $postalCode = '';

	/**
	 * City
	 *
	 * @var string
	 */
	protected $city = '';

	/**
	 * Country
	 *
	 * @var string
	 */
	protected $country = '';

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
	 * Image for location
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * Marker of location
	 *
	 * @var \Heilmann\JhGooglemaps\Domain\Model\Marker
	 */
	protected $marker = NULL;

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
	 * Returns the street
	 *
	 * @return string $street
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the street
	 *
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the streetNumber
	 *
	 * @return string $streetNumber
	 */
	public function getStreetNumber() {
		return $this->streetNumber;
	}

	/**
	 * Sets the streetNumber
	 *
	 * @param string $streetNumber
	 * @return void
	 */
	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $streetNumber;
	}

	/**
	 * Returns the city
	 *
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the country
	 *
	 * @return string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Returns the postalCode
	 *
	 * @return string postalCode
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * Sets the postalCode
	 *
	 * @param integer $postalCode
	 * @return string postalCode
	 */
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the additionalNotation
	 *
	 * @return string $additionalNotation
	 */
	public function getAdditionalNotation() {
		return $this->additionalNotation;
	}

	/**
	 * Sets the additionalNotation
	 *
	 * @param string $additionalNotation
	 * @return void
	 */
	public function setAdditionalNotation($additionalNotation) {
		$this->additionalNotation = $additionalNotation;
	}

}