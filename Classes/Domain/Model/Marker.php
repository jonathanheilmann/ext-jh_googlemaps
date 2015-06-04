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
 * Custom markers for locations
 */
class Marker extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * Title of marker
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * Image of marker
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * Size of icon (X,Y)
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * Origin of image (X,Y)
	 *
	 * @var string
	 */
	protected $origin = '';

	/**
	 * Anchor if image (X,Y)
	 *
	 * @var string
	 */
	protected $anchor = '';

	/**
	 * https://developers.google.com/maps/documentation/javascript/reference?hl=de#MarkerShape
	 *
	 * @var string
	 */
	protected $shapeCoords = '';

	/**
	 * Describes the shape's type and can be circle, poly or rect.
	 *
	 * @var string
	 */
	protected $shapeType = '';

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
	 * Returns the size
	 *
	 * @return string $size
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Sets the size
	 *
	 * @param string $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * Returns the origin
	 *
	 * @return string $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param string $origin
	 * @return void
	 */
	public function setOrigin($origin) {
		$this->origin = $origin;
	}

	/**
	 * Returns the anchor
	 *
	 * @return string $anchor
	 */
	public function getAnchor() {
		return $this->anchor;
	}

	/**
	 * Sets the anchor
	 *
	 * @param string $anchor
	 * @return void
	 */
	public function setAnchor($anchor) {
		$this->anchor = $anchor;
	}

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
	 * Returns the shapeCoords
	 *
	 * @return string $shapeCoords
	 */
	public function getShapeCoords() {
		return $this->shapeCoords;
	}

	/**
	 * Sets the shapeCoords
	 *
	 * @param string $shapeCoords
	 * @return void
	 */
	public function setShapeCoords($shapeCoords) {
		$this->shapeCoords = $shapeCoords;
	}

	/**
	 * Returns the shapeType
	 *
	 * @return string $shapeType
	 */
	public function getShapeType() {
		return $this->shapeType;
	}

	/**
	 * Sets the shapeType
	 *
	 * @param string $shapeType
	 * @return void
	 */
	public function setShapeType($shapeType) {
		$this->shapeType = $shapeType;
	}

}