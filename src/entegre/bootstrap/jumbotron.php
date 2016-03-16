<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class jumbotron extends \entegre\factory\node {

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'div', $a, $c );
		$this->attr( 'class', 'jumbotron' );
	}

	public function header( $x = null, $y = null ) {
		if( !empty( $x ) ) {
			$z = E('heading')->primary( $x );
			if( !empty( $y ) ) {
				$z->secondary( $y );
			}
			$this->child( $z );
		}
		return $this;
	}

}

?>