<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap;

class checkbox {
	
	use \entegre\factory\attr;

	protected $_label = null;

	protected $_inline = false;

	protected $_disabled = false;

	public function __construct( $a = null ) {
		$this->attrs( $a );
	}

	public function inline() {
		$this->_inline = true;
		return $this;
	}

	public function disabled() {
		$this->_disabled = true;
		return $this;
	}

	public function label( $x ) {
		$this->_label = $x;
		return $this;
	}

	public function build() {
		$x = \entegre\E( 'label' );
		if( $this->_inline ) {
			$x->attr( 'class', 'checkbox-inline' );
		}
		$y = \entegre\E( 'input', [ 'type' => 'checkbox' ] );
		$y->attr( $this->a );
		if( $this->_disabled ) {
			$y->attr( 'disabled', 'true' );
		}
		$x->child( $y );
		if( ! empty( $this->_label ) ) {
			$x->child( $this->_label );
		}
		if( ! $this->_inline ) {
			$x = \entegre\E( 'div', [ 'class' => 'checkbox' ] )->child( $x );
			if( $this->_disabled ) {
				$x->attr( 'disabled', 'true' );
			}
		}
		return $x->build();
	}

}

?>