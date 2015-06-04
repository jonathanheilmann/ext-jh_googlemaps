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
 * Test case for class \Heilmann\JhGooglemaps\Domain\Model\Location.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Jonathan Heilmann <mail@jonathan-heilmann.de>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Heilmann\JhGooglemaps\Domain\Model\Location
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Heilmann\JhGooglemaps\Domain\Model\Location();
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
	public function getAddressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() {
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() {
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetNumberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreetNumber()
		);
	}

	/**
	 * @test
	 */
	public function setStreetNumberForStringSetsStreetNumber() {
		$this->subject->setStreetNumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'streetNumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPostalCodeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPostalCode()
		);
	}

	/**
	 * @test
	 */
	public function setPostalCodeForStringSetsPostalCode() {
		$this->subject->setPostalCode('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'postalCode',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() {
		$this->subject->setCountry('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'country',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLatLngReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLatLng()
		);
	}

	/**
	 * @test
	 */
	public function setLatLngForStringSetsLatLng() {
		$this->subject->setLatLng('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'latLng',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTeaser()
		);
	}

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser() {
		$this->subject->setTeaser('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teaser',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMarkerReturnsInitialValueForMarker() {
		$this->assertEquals(
			NULL,
			$this->subject->getMarker()
		);
	}

	/**
	 * @test
	 */
	public function setMarkerForMarkerSetsMarker() {
		$markerFixture = new \Heilmann\JhGooglemaps\Domain\Model\Marker();
		$this->subject->setMarker($markerFixture);

		$this->assertAttributeEquals(
			$markerFixture,
			'marker',
			$this->subject
		);
	}
}
