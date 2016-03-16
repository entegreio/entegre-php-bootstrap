<?php

/**
 * @package entegre-bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap;

spl_autoload_register( function ( $n ) {
	$n = str_replace( '\\', '/', strtolower( ltrim( strtolower( substr( $n, 0, 17 ) ) == 'entegre\\bootstrap' ? substr( $n, 17 ) : $n, '\\' ) ) );
	$f = __DIR__ . '/' . $n . '.php';
	if( is_file( $f ) ) {
		require_once $f;
	}
} );

function E( $cls, $arg = null ) {
	$c = strtolower( "entegre\\bootstrap\\$cls" );
	if( class_exists( $c ) ) {
		return new $c( $arg );
	}
}

\entegre\cfg()->pre( 'search_order', 'bootstrap' );

?>