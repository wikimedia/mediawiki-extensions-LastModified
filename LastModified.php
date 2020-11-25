<?php
/**
 * Wikimedia Foundation
 *
 * LICENSE
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * @author Katie Horn <khorn@wikimedia.org>
 * @author Jeremy Postlethwaite <jpostlethwaite@wikimedia.org>
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'LastModified' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['LastModified'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the LastModified extension. ' .
		'Please use wfLoadExtension() instead, ' .
		'see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the LastModified extension requires MediaWiki 1.29+' );
}
