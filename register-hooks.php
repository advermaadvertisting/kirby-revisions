<?php
use JensTornell\Revisions as Revisions;

kirby()->hook('panel.page.create', function( $page ) {
  // Bind the hook to the author field, if author field
  // is present, wo know its part of the editorial workflow
  if ( $page->content()->has('author') ) {
    $obj = new Revisions\CreateRevisions( $page );
    $obj = new Revisions\CreateRevision();
    $obj->go( $page, 'create', $page->content()->language() );
  };
});

kirby()->hook('panel.page.update', function( $page ) {
  // Bind the hook to the author field, if author field
  // is present, wo know its part of the editorial workflow
  if ( $page->content()->has('author') ) {
    $obj = new Revisions\CreateRevisions( $page );
    $obj = new Revisions\CreateRevision();
    $obj->go( $page, 'update', $page->content()->language() );
  };
});

function debug_hook($content) {
	$dir = kirby()->roots()->index() . DS . 'hook.page.txt';
	file_put_contents($dir, $content);
}