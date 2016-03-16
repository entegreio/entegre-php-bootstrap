<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class image {

	use \entegre\factory\attr;

	public function __construct( $a = null ) {
		$this->attrs( $a );
	}

	public function mode( $x = null ) {
		$y = [ '', 'circle', 'rounded', 'thumbnail' ];
		$x = trim( strtolower( $x ) );
		if( in_array( $x, $y ) ) {
			$this->attr( 'class', "img-$x" );
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'img' );
		$x->attrs( $this->a );
		return $x->build();
	}

}

?>