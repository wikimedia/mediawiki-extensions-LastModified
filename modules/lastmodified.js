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

/**
 * Run the last modified helper.
 *
 * This is the primary function for this script.
 *
 */
function extensionsLastModified() {

	// Get the last-edit value
	var lastEdited = extensionsLastModifiedGetMetaLastEdited();
	//console.log( 'lastEdited: ' + lastEdited );

	// Get the last-modified-range value
	var displayRange = extensionsLastModifiedGetMetaRange();
	//console.log( 'displayRange: ' + displayRange );
	
	// Get the current timestamp and remove the milliseconds
	var nowStamp = extensionsLastModifiedGetUtcTimeStamp();
	//console.log( 'nowStamp: ' + nowStamp );

	// Get the difference in the time from when it was last edited.
	var modifiedDifference = nowStamp - lastEdited;
	//console.log( 'modifiedDifference: ' + modifiedDifference );

	// Get the last modified text
	var lastModifiedText = extensionsLastModifiedGetLastModifiedText( modifiedDifference, displayRange );
	//console.log( 'lastModifiedText: ' + lastModifiedText );
	
	// Insert the text on the web page
	extensionsLastModifiedInsertHtml( lastModifiedText );
}
/**
 * Get the UTC Timestamp without microseconds
 *
 * @todo
 * - What do we need to do about timezones?
 *
 * @return integer
 */
function extensionsLastModifiedGetUtcTimeStamp() {
	
	// Get the current Date object
	var now = new Date();
	//console.log( 'now: ' + now );
	
	return parseInt( now.getTime() / 1000 );

	// Return the UTC timestamp
	return parseInt( 
		Date.UTC( 
			now.getUTCFullYear(),
			now.getUTCMonth(),
			now.getUTCDay(),
			now.getUTCHours(),
			now.getUTCMinutes(),
			now.getUTCSeconds()
		) / 1000
	);
}

/**
 * Get the article history link
 *
 * @return string	Return the article title
 */
function extensionsLastModifiedGetArticleHistoryLink() {

	var href = $(location).attr('href');

	var query = '';
	
	if (href.indexOf('?') == -1) {
		query += '?';
	}
	else {
		query += '&amp;';
	}

	query += 'action=history';
	
	//console.log( 'href: ' + href );
	
	return href + query;
}

/**
 * Get the value from the meta tag: last-edited
 *
 * @return integer
 */
function extensionsLastModifiedGetMetaLastEdited() {
	
	// Fetch the meta tag
	var metaTag = $("meta[name=last-edited]");    

	// If the tag was found, parse the value
	if ( metaTag ) {
		
		return parseInt( metaTag.attr( 'content' ) );
	}
	
	return 0;
}

/**
 * Get the modified text. This takes advantage of internationalization.
 *
 * @param integer	modifiedDifference	The difference of time from now compared to last edited
 * @param integer	displayRange		The maximum unit of time to display for last updated
 *
 * displayRange
 * - 0: default	- display: years, months, days, hours, minutes, seconds  
 * - 1: months 	- display: months, days, hours, minutes, seconds  
 * - 2: days	- display: days, hours, minutes, seconds  
 * - 3: hours	- display: hours, minutes, seconds  
 * - 4: minutes	- display: minutes, seconds  
 * - 5: seconds	- display: seconds  
 *
 * @return string
 */
function extensionsLastModifiedGetLastModifiedText( modifiedDifference, displayRange ) {

	// Message to return
	var message = '';
	var lastEdit = modifiedDifference;
	
	if ( modifiedDifference < 60 ) {

		// seconds
		message = ( mw.msg( 'lastmodified-seconds',  lastEdit ) );
		
	}
	else if ( modifiedDifference < 3600 ) {

		// minutes
		lastEdit = parseInt( modifiedDifference / 60 );
		message = ( mw.msg( 'lastmodified-minutes', myLastEdit ) );
		
	}
	else if ( modifiedDifference < 86400 ) {

		// hours
		myLastEdit = parseInt( modifiedDifference / 3600 );
		message = ( mw.msg( 'lastmodified-hours', myLastEdit ) );
		
	}
	else if ( modifiedDifference < 2592000 ) {
		
		// days
		myLastEdit = parseInt( modifiedDifference / 86400 );
		message = ( mw.msg( 'lastmodified-days', myLastEdit ) );
		
	}
	else if ( modifiedDifference < 31536000 ) {

		// months
		myLastEdit = parseInt( modifiedDifference / 2592000 );
		message = ( mw.msg( 'lastmodified-months', myLastEdit ) );
		
	}
	else {

		// years
		myLastEdit = parseInt( modifiedDifference / 31536000 );
		message = ( mw.msg( 'lastmodified-years', myLastEdit ) );
		
	}
	
	return message;
}

/**
 * Get the value from the meta tag: last-modified-range
 *
 * @return integer
 */
function extensionsLastModifiedGetMetaRange() {

	// Fetch the meta tag
	var metaTag = $("meta[name=last-modified-range]");    

	// If the tag was found, parse the value
	if ( metaTag ) {
		
		return parseInt( metaTag.attr( 'content' ) );
	}
	
	return 0;
}

/**
 * Insert the last modified text with jQuery
 *
 * @param string	lastModifiedText	The string of text to display in the container.
 */
function extensionsLastModifiedInsertHtml( lastModifiedText ) {

	//http://en.wikipedia.org/w/index.php?title=San_Francisco&action=history
	
	// Get the article history link
	var historyLink = extensionsLastModifiedGetArticleHistoryLink();
	//console.log( 'historyLink: ' + historyLink );

	var html = '';
	
	html += '<div style="float: right;" class="lastmodified">';
	html += '<a href="' + historyLink + '" title="View the revision history for this article.">';
	html += lastModifiedText;
	html += '</a>';
	html += '</div>';
	
	$('.mw-content-ltr').prepend( html );
}

/**
 * Display the last modified link on the page.
 *
 */
$(document).ready(function(){
	extensionsLastModified();	
});

