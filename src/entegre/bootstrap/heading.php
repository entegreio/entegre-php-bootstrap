<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;


class heading {

	use \entegre\factory\attr;
	use \entegre\bootstrap\factory\typography;

	private $_size = 1;
	private $_primary = [];
	private $_secondary = [];

	public function __construct( $s = 1, $a = null ) {
		$s = (integer)$s;
		$this->_size = ( $s >= 1 && $s <= 6 ? $s : 1 );
		$this->attr( $a );
	}

	public function primary( $x ) {
		if( !empty( $x ) ) {
			$this->_primary[] = $x;
		}
		return $this;
	}

	public function secondary( $x ) {
		if( !empty( $x ) ) {
			$this->_secondary[] = $x;
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'h' . $this->_size, $this->a );
		if( !empty( $this->_primary ) ) {
			$x->child( $this->_primary );
		}
		if( !empty( $this->_secondary ) ) {
			$x->child( $E->node( 'small', null, $this->_secondary ) );
		}
		return $x->build();
	}

}

?>