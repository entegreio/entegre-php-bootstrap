<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class inputgroup {

	use \entegre\factory\attr;

	protected $_ap = null;
	protected $_as = null;
	protected $_if = null;

	public function __construct( $a = null ) {
		$this->attrs( $a );
		$this->attr( 'class', 'input-group' );
	}

	public function size( $x ) {
		$x = trim( strtolower( $x ) );
		if( in_array( $x, [ 'sm', 'lg' ] ) ) {
			$this->attr( 'class', "input-group-$x" );
		}
		return $this;
	}

	public function before( $x ) {
		if( !empty( $x ) ) {
			$this->_ap = $x;
		}
		return $this;
	}

	public function after( $x ) {
		if( !empty( $x ) ) {
			$this->_as = $x;
		}
		return $this;
	}

	public function field( $x ) {
		if( !empty( $x ) ) {
			$this->_if = $x;
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'div', $this->a );
		if( !empty( $this->_ap ) ) {
			$x->child( $E->node( 'span', [ 'class' => 'input-group-addon' ], $this->_ap ) );
		}
		$x->child( $this->_if );
		if( !empty( $this->_as ) ) {
			$x->child( $E->node( 'span', [ 'class' => 'input-group-addon' ], $this->_as ) );
		}
		return $x->build();
	}

}

?>