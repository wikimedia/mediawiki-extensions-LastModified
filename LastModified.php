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
 * @author		Katie Horn <khorn@wikimedia.org>, Jeremy Postlethwaite <jpostlethwaite@wikimedia.org>
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install this extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/LastModified/LastModified.php" );
EOT;
	exit( 1 );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'LastModified',
	'version' => '1.0',
	'url' => 'http://www.mediawiki.org/wiki/Extension:LastModified',
	'author' => array( 'Katie Horn', 'Jeremy Postlethwaite' ),
	'descriptionmsg' => 'lastmodified-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgAutoloadClasses['SpecialLastModified'] = $dir . 'SpecialLastModified.php';
$wgExtensionMessagesFiles['LastModified'] = $dir . 'LastModified.i18n.php';
$wgExtensionAliasesFiles['LastModified'] = $dir . 'LastModified.alias.php';
$wgSpecialPages['LastModified'] = 'SpecialLastModified';

/**
 * ADDITIONAL MAGICAL GLOBALS 
 */

// Resource modules
$wgResourceTemplate = array(
	'localBasePath' => $dir . 'modules',
	'remoteExtPath' => 'LastModified/modules',
);

$wgResourceModules['last.modified'] = array(
	'scripts' => 'lastmodified.js',
	'position' => 'top',
	'messages' => array(
		'lastmodified-seconds',
		'lastmodified-hours',
		'lastmodified-minutes',
		'lastmodified-hours',
		'lastmodified-days',
		'lastmodified-months',
		'lastmodified-years',
		'lastmodified-title-tag',
	),
) + $wgResourceTemplate;

$wgHooks['BeforePageDisplay'][] = 'fnLastModified';

$wgLastModifiedRange = isset( $wgLastModifiedRange ) ? (integer) $wgLastModifiedRange : 0;

/**
 * @param $out OutputPage
 * @param $sk Skin
 * @return bool
 */
function fnLastModified( &$out, &$sk ) {
	global $wgLastModifiedRange;

	$context = $out->getContext();
	$title = $context->getTitle();
	$article = Article::newFromTitle( $title, $context );

	if ( $article && ( ( $title instanceof Title ) && $title->getNamespace() == 0 ) ) {
		$timestamp = wfTimestamp ( TS_UNIX, $article->getTimestamp() );
		$out->addMeta( 'http:last-modified', date( 'r', $timestamp ) );
		$out->addMeta( 'last-modified-timestamp', $timestamp );
		$out->addMeta( 'last-modified-range', $wgLastModifiedRange );
		$out->addModules( 'last.modified' );
	} 

	return true;
}

