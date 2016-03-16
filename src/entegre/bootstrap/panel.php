<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class panel {

	use \entegre\factory\attr;
	use \entegre\bootstrap\factory\mode;

	protected $_h = [];
	protected $_b = [];
	protected $_f = [];

	public function __construct( $a = null, $c = null ) {
		$this->attr( 'class', 'panel' );
		$this->_prefix = 'panel';
	}

	public function header( $x ) {
		if( !empty( $x ) ) {
			$this->_h[] = $x;
		}
		return $this;
	}

	public function body( $x ) {
		if( !empty( $x ) ) {
			$this->_b[] = $x;
		}
		return $this;
	}

	public function footer( $x ) {
		if( !empty( $x ) ) {
			$this->_f[] = $x;
		}
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'div' )->attr( $this->a, null, true );
		if( ap( $this->_h ) ) {
			$y = $E->node( 'div', [ 'class' => 'panel-heading' ] );
			if( count( $this->_h ) == 1 ) {
				$y->child( $E->node( 'h3', [ 'class' => 'panel-title' ], $this->_h[0] ) );
			} else {
				$y->child( $this->_h );
			}
			$x->child( $y );
		}
		if( ap( $this->_b ) ) {
			$x->child( $E->node( 'div', [ 'class' => 'panel-body' ], $this->_b ) );
		}
		if( ap( $this->_f ) ) {
			$x->child( $E->node( 'div', [ 'class' => 'panel-footer' ], $this->_f ) );
		}
		return $x->build();
	}

}

?>