/**
 * E3 Timestamp Experiment Campaign Loader
 */

/*jslint white:true, vars:true */
/*globals mw, $, murmurhash2_32_gc */

(function ( global ) {
	"use strict";

	var VERSION = 1;

	var bucket_name;

	function generateEvent( event_type ) {
		var id = [ 'ext.lastModified', VERSION ].join('@');
		return [ id, bucket_name, event_type ].join('-');
	}

	// Simple random sampling using murmurhash2
	function inSample( key, fraction ) {
		// murmurhash2_32_gc generates hashes in the 32-bit unsigned
		// integer range ( 0 - 2^32 ).
		var sample = fraction * 4294967296;  // 2^32
		var hash = murmurhash2_32_gc( key.toString() , 1 );
		return ( hash <= sample );
	}

	// Determine whether the current view should display the experiment
	function isEligible() {
		return (

			// The current user has not opted out
			mw.user.options.get('vector-noexperiments') !== "1"

			// We're on an article page
			&& mw.config.get( 'wgIsArticle' )

			// The article is in the main namespace
			&& mw.config.get( 'wgNamespaceNumber' ) === 0

			// The article is being viewed (not edited, printed, watched, etc.)
			&& mw.config.get( 'wgAction' ).match( /view|purge/ )

			// This isn't a redirect
			&& mw.util.getParamValue( 'redirect' ) !== 'no'

			// We're not in print view
			&& mw.util.getParamValue( 'printable' ) !== 'yes'

			// We're not viewing a diff
			&& mw.util.getParamValue( 'diff' ) === null
			&& mw.util.getParamValue( 'oldid' ) === null
		);
	}

	// The space where we plop the timestamp is subject to contention by
	// various other widgets, extensions and templates, so we need to
	// inspect the dom and make adjustments to CSS according to what we
	// discover.
	function getStyleOverrides() {
		var overrides = {}, icon, offset;

		// Identifiy the leftmost top icon, if present, by passing
		// a custom comparison function to Array.sort.
		icon = Array.prototype.sort.call( $( '.topicon' ), function ( a, b ) {
			return $(a).position().left - $(b).position.left;
		} ).last();

		// If there are any top icons, we'l shift the timestamp to the
		// right of the leftmost one.
		if ( icon.length ) {
			offset = icon.parent().width() - icon.position().left;
			// As a sanity check, make sure we aren't offsetting by
			// more space than we have available.
			if ( offset < $('#bodyContent').width() ) {
				overrides['margin-right'] = offset;
				overrides['padding-right'] = 20;
			}
		}
		return overrides;
	}

	function trackTimestamp() {
		$( function () {
			var uri;
			var el = $( '#mwe-lastmodified' );
			var a = $( 'a', el );
			var historyAnchor = $( '#ca-history a' );
			var newUrl;

			// Get the base history URI.
			// We prefer the one from the History tab since it is consistant,
			// but older MediaWiki skins don't use the 'ca-history' id.
			if ( historyAnchor.length ) {
				uri = historyAnchor.attr( 'href' );
				newUrl = $.trackActionURL( encodeURI(uri), generateEvent('history_tab_link-click') );
				historyAnchor.attr( 'href', newUrl );
			} else {
				uri = a.attr( 'href' );
			}

			// The tracking URL is generated by the click-tracking extension. It
			// will log the event and redirect the user to the history page.
			newUrl = $.trackActionURL( encodeURI(uri), generateEvent('timestamp_link-click') );

			// Inject the click-tracking redirect URL
			a.attr( 'href', newUrl );

			// Show the last modified message
			el.css( getStyleOverrides() ).show();

		} );
	}

	var article_in_sample = inSample( mw.config.get('wgArticleId'), 0.006 );
	var user_is_eligible = isEligible();

	// Register the experiment as a campaign with the clicktracking extension
	mw.activeCampaigns = mw.activeCampaigns || {};
	mw.activeCampaigns.lastModified  = {
		name	: 'lastModified',
		version : VERSION,
		rates   : {
			// Bucket 50% of users into group
			expr1 : 1,
			ctrl1 : 1
		},
		expr1 : function () {
			bucket_name = 'expr1';
			if ( article_in_sample && user_is_eligible ) {
				mw.loader.using( 'last.modified', trackTimestamp );
			}
		},
		ctrl1 : function () {
			bucket_name = 'ctrl1';
		},
		allActive : function () {
			if ( article_in_sample && user_is_eligible ) {
				$.trackAction( generateEvent('impression') );
			}
		}
	};
}( this ));
