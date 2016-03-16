<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class blockquote {

	use \entegre\factory\attr;
	use \entegre\factory\children;

	private $_reverse = false;
	private $_footer = [];

	public function __construct( $a = null ) {
		$this->attr( $a );
	}

	public function reverse() {
		$this->_reverse = true;
		return $this;
	}

	public function footer( $x ) {
		if( !empty( $x ) ) {
			$this->_footer[] = $x;
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'blockquote', $this->a, $this->c );
		if( $this->_reverse ) {
			$x->attr( 'class', 'blockquote-reverse' );
		}
		if( ap( $this->_footer ) ) {
			$x->child( $E->node( 'footer', null, $this->_footer ) );
		}
		return $x->build();
	}

}

?>