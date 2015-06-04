<?php

namespace Heilmann\JhGooglemaps\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Jonathan Heilmann <mail@jonathan-heilmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Heilmann\JhGooglemaps\Domain\Model\Marker.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Jonathan Heilmann <mail@jonathan-heilmann.de>
 */
class MarkerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Heilmann\JhGooglemaps\Domain\Model\Marker
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Heilmann\JhGooglemaps\Domain\Model\Marker();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSizeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSize()
		);
	}

	/**
	 * @test
	 */
	public function setSizeForStringSetsSize() {
		$this->subject->setSize('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'size',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOriginReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOrigin()
		);
	}

	/**
	 * @test
	 */
	public function setOriginForStringSetsOrigin() {
		$this->subject->setOrigin('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'origin',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAnchorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAnchor()
		);
	}

	/**
	 * @test
	 */
	public function setAnchorForStringSetsAnchor() {
		$this->subject->setAnchor('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'anchor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShapeCoordsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getShapeCoords()
		);
	}

	/**
	 * @test
	 */
	public function setShapeCoordsForStringSetsShapeCoords() {
		$this->subject->setShapeCoords('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shapeCoords',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShapeTypeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getShapeType()
		);
	}

	/**
	 * @test
	 */
	public function setShapeTypeForStringSetsShapeType() {
		$this->subject->setShapeType('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shapeType',
			$this->subject
		);
	}
}
