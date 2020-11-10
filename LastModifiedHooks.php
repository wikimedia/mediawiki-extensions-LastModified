<?php

class LastModifiedHooks {
	/**
	 * @param OutputPage &$out
	 * @param Skin &$sk
	 * @return bool
	 */
	public static function onLastModified( &$out, &$sk ) {
		global $wgLastModifiedRange;

		$context = $out->getContext();
		$title = $context->getTitle();
		$article = Article::newFromTitle( $title, $context );

		if ( $article && $title instanceof Title && $title->getNamespace() == 0 && $title->exists() ) {
			$timestamp = wfTimestamp ( TS_UNIX, $article->getPage()->getTimestamp() );
			$out->addMeta( 'http:last-modified', date( 'r', $timestamp ) );
			$out->addMeta( 'last-modified-timestamp', $timestamp );
			$out->addMeta( 'last-modified-range', $wgLastModifiedRange );
			$out->addModules( 'last.modified' );
		}

		return true;
	}
}
