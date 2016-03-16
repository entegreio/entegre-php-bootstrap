<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class select {

	use \entegre\factory\attr;

	protected $_items = [];
	protected $_value = null;

	public function __construct( $a = null, $c = null ) {
		$this->attrs( $a );
		$this->attr( 'class', 'form-control' );
		if( !empty( $c ) && is_array( $c ) ) {
			$this->items( $c );
		}
	}

	public function multiple() {
		$this->attr( 'multiple', 'true' );
		return $this;
	}

	public function selected( $x ) {
		$this->_value = $x;
		return $this;
	}

	public function item( $l, $v = null, $s = false, $d = false ) {
		if( !empty( $l ) ) {
			$this->_items[] = [ 'value' => $v, 'label' => $l, 'disabled' => (bool)$d ];
			if( (bool)$s ) {
				$this->_value = $v;
			}
		}
		return $this;
	}

	public function items( $d ) {
		if( is_array( $d ) ) {
			foreach( $d as $x ) {
				if( array_key_exists( 'value', $x ) && array_key_exists( 'label', $x ) ) {
					$this->item( $x['label'], $x['value'] );
				} else {
					$this->item( $x[0], $x[1] );
				}
			}
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'select', $this->a );
		foreach( $this->_items as $y ) {
			$z = $E->node( 'option', [ 'value' => $y['value'] ], $y['label'] );
			if( $y['value'] == $this->_value ) {
				$z->attr( 'selected' );
			}
			if( $y['disabled'] === true ) {
				$z->attr( 'disabled' );
			}
			$x->child( $z );
		}
		return $x->build();
	}

}

?>