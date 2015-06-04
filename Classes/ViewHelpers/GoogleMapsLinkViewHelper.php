<?php
namespace Heilmann\JhGooglemaps\ViewHelpers;
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
 *
 *
 * @author Jonathan Heilmann <mail@jonathan-heilmann.de>
 * @package JhGooglemaps
 * @subpackage ViewHelpers
 */
class GoogleMapsLinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 *
	 *
	 * @param $coordinates string
	 * @param $description string
	 * @param $view string
	 * @param $zoom integer
	 * @return string
	 */
	public function render($coordinates, $description='', $view='m', $zoom=19) {
		$uri = '';
		$coordinates = str_replace(' ', '', $coordinates);
		if (!empty($description)) {
			$description = str_replace(' ', '+', $description);
			$description = '('.htmlspecialchars($description).')';
		}
		if (!empty($view)) {
			$view = '&t='.$view;
		}
		if (!empty($zoom)) {
			$zoom = '&z='.$zoom;
		}
		return 'http://maps.google.com/maps?q='.$coordinates.$description.$view.$zoom;
	}

}