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
 * @author    Ori Livneh <ori@wikimedia.org>
 */

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'E3 Experiment Loader',
	'version' => '0.1',
	'url' => 'https://www.mediawiki.org/wiki/Extension:E3Experiments',
	'author' => array( 'Ori Livneh' ),
	'descriptionmsg' => 'e3experiments-desc',
);

// This extension requires that the ClickTracking extension is installed
$wgResourceModules['ext.E3Experiments'] = array(
	'scripts' => array( 'js/murmurhash2_gc.js', 'js/ext.E3Experiments.Timestamp.js' ),
	'dependencies' => array( 'jquery.clickTracking' ),
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'LastModified/E3Experiments'
);

$wgHooks['BeforePageDisplay'][] = 'loadExperiments';

function loadExperiments( $out ) {
	$out->addModules( 'ext.E3Experiments' );

	// Hack. If we defer loading to the Resource Loader, we get FOUCs.
	$out->addInlineStyle( '#mwe-lastmodified { display: none; }' );
	return true;
}
