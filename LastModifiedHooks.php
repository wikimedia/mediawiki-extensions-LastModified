<?php

use MediaWiki\Title\Title;

class LastModifiedHooks implements
	\MediaWiki\Hook\BeforePageDisplayHook
{
	/**
	 * @param OutputPage $out
	 * @param Skin $skin
	 * @return void
	 */
	public function onBeforePageDisplay( $out, $skin ): void {
		$context = $out->getContext();
		$title = $context->getTitle();

		// Don't try to proceed if we don't care about the target page
		if ( !( $title instanceof Title && $title->inNamespaces( $out->getConfig()->get( 'LastModifiedNamespaces' ) ) &&
			$title->exists() ) ) {
			return;
		}

		$article = Article::newFromTitle( $title, $context );

		if ( $article ) {
			$timestamp = wfTimestamp( TS_UNIX, $article->getPage()->getTimestamp() );
			$out->addMeta( 'http:last-modified', date( 'r', $timestamp ) );
			$out->addMeta( 'last-modified-timestamp', $timestamp );
			$out->addMeta( 'last-modified-range', $out->getConfig()->get( 'LastModifiedRange' ) );
			$out->addModules( 'last.modified' );
		}
	}
}
