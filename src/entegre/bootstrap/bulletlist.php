<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class bulletlist {

	use \entegre\factory\attr;
	use \entegre\factory\children;

	private $_t = 'u';

	public function __construct( $a = null, $c = null ) {
		$this->attrs( $a );
		$this->child( $c );
	}

	public function ordered() {
		$this->_t = 'o';
		return $this;
	}

	public function unordered() {
		$this->_t = 'u';
		return $this;
	}

	public function inline() {
		$this->unordered();
		$this->attr( 'class', 'list-inline' );
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( "{$this->_t}l" );
		$x->attrs( $this->a );
		if( ap( $this->c ) ) {
			foreach( $this->c as $c ) {
				$x->child( $E->node( 'li', null, $c ) );
			}
		}
		return $x->build();
	}

}

?>