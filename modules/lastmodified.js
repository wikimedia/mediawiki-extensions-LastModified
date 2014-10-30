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

( function () {

/**
 * Find out when the article was last modified and insert it into the page.
 *
 * This is the primary function for this script.
 */
function render () {

	// Get the last-modified-timestamp value
	var lastModifiedTimestamp = getMetaLastModifiedTimestamp();

	// Get the last-modified-range value
	var displayRange = getMetaRange();
	
	// Get the current timestamp and remove the milliseconds
	var nowStamp = getUtcTimeStamp();

	// Get the difference in the time from when it was last edited.
	var modifiedDifference = nowStamp - lastModifiedTimestamp;

	// Get the last modified text
	var lastModifiedText = getLastModifiedText( modifiedDifference, displayRange );

	// Get the article history link
	var historyLink = getArticleHistoryLink();

	// Get the current skin
	var currentSkin = mw.config.get( 'skin' );

	// Get the proper styling (skin-dependent)
	var divStyle = getDivStyle( currentSkin );

	// Get the HTML property to append to (skin-dependent)
	var htmlProperty = getHtmlProperty( currentSkin );

	// Construct the HTML
	var html = '';
	html += '<div style="' + divStyle + '" id="mwe-lastmodified">';
	html += '<a href="' + historyLink + '" title="' + mw.message( 'lastmodified-title-tag' ).escaped() + '">';
	html += lastModifiedText;
	html += '</a>';
	html += '</div>';

	// Insert the HTML into the web page
	$( htmlProperty ).append( html );
}
/**
 * Get the UTC Timestamp without microseconds
 *
 * @return {number}
 */
function getUtcTimeStamp () {
	return parseInt( new Date().getTime() / 1000 );
}

/**
 * Get the article history link
 *
 * @return {string} Return the article title
 */
function getArticleHistoryLink () {
	return mw.config.get( 'wgScript' ) + '?title=' + encodeURIComponent( mw.config.get( 'wgPageName' ) ) + '&action=history';
}

/**
 * Get the value from the meta tag: last-modified-timestamp
 *
 * @return {number}
 */
function getMetaLastModifiedTimestamp () {
	// Fetch the meta tag
	var metaTag = $( "meta[name=last-modified-timestamp]" );

	// If the tag was found, parse the value
	if ( metaTag ) {
		return parseInt( metaTag.attr( 'content' ) );
	}
	
	return 0;
}

/**
 * Get the modified text. This takes advantage of internationalization.
 *
 * @param {number} modifiedDifference The difference of time from now compared to last edited
 * @param {number} displayRange	The maximum unit of time to display for last updated
 *
 * displayRange
 * - 0: years	- display: years, months, days, hours, minutes, seconds  
 * - 1: months 	- display: months, days, hours, minutes, seconds  
 * - 2: days	- display: days, hours, minutes, seconds  
 * - 3: hours	- display: hours, minutes, seconds  
 * - 4: minutes	- display: minutes, seconds  
 * - 5: seconds	- display: seconds  
 *
 * @return {string}
 */
function getLastModifiedText ( modifiedDifference, displayRange ) {

	// Message to return
	var message = '';
	// The modifiedDifference should never be less than 0
	if ( modifiedDifference < 0 ) {
		modifiedDifference = 0;
	}
	var myLastEdit = modifiedDifference;
	
	if ( modifiedDifference < 60 ) {
		// seconds
		message = mw.msg( 'lastmodified-seconds',  myLastEdit );
	} else if ( modifiedDifference < 3600 ) {
		// minutes
		if ( displayRange <= 4 ) {
			myLastEdit = parseInt( modifiedDifference / 60 );
			message = mw.msg( 'lastmodified-minutes', myLastEdit );
		}
	} else if ( modifiedDifference < 86400 ) {
		// hours
		if ( displayRange <= 3 ) {
			myLastEdit = parseInt( modifiedDifference / 3600 );
			message = mw.msg( 'lastmodified-hours', myLastEdit );
		}
	} else if ( modifiedDifference < 2592000 ) {
		// days
		if ( displayRange <= 2 ) {
			myLastEdit = parseInt( modifiedDifference / 86400 );
			message = mw.msg( 'lastmodified-days', myLastEdit );
		}
	} else if ( modifiedDifference < 31536000 ) {
		// months
		if ( displayRange <= 1 ) {
			myLastEdit = parseInt( modifiedDifference / 2592000 );
			message = mw.msg( 'lastmodified-months', myLastEdit );
		}
	} else {
		// years
		if ( displayRange == 0 ) {
			myLastEdit = parseInt( modifiedDifference / 31536000 );
			message = mw.msg( 'lastmodified-years', myLastEdit );
		}		
	}
	
	return message;
}

/**
 * Get the value from the meta tag: last-modified-range
 *
 * @return {number}
 */
function getMetaRange () {
	// Fetch the meta tag
	var metaTag = $( 'meta[name=last-modified-range]' );

	// If the tag was found, parse the value
	if ( metaTag ) {
		return parseInt( metaTag.attr( 'content' ) );
	}
	
	return 0;
}

/**
 * Get the proper div style tag information depending on the skin
 *
 * @return {string}
 */
function getDivStyle ( skin ) {
	if ( skin == 'modern' ) {
		return "float: right;";
	} else {
		return "float: right; font-size: 0.5em;";
	}
}

/**
 * Get the HTML property to append to depending on the skin
 *
 * @return {string}
 */
function getHtmlProperty ( skin ) {
	if ( skin == 'modern' ) {
		return '#p-cactions';
	} else {
		return '#firstHeading';
	}
}

/**
 * Display the last modified link on the page.
 */
$( render );

}() );
