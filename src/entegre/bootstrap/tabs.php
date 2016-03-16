<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap;

class tabs {
	
	use \entegre\factory\attr;
	use \entegre\factory\deck;

	private $_type = null;

	private $_justify = false;

	public function __construct( $a = null ) {
		$this->_type = array_pop( explode( '\\', static::class ) );
		$this->attr( $a );
	}

	public function justified() {
		$this->_justify = true;
		return $this;
	}

	public function build() {
		$x = \entegre\E( 'ul', [ 'class' => [ 'nav', 'nav-' . $this->_type ], 'role' => 'tablist' ] );
		if( $this->_justify ) {
			$x->attr( 'class', 'nav-justified' );
		}
		$y = \entegre\E( 'div', [ 'class' => 'tab-content' ] );
		for( $i = 0; $i < count( $this->c ); $i ++ ) {
			$c = $this->c[ $i ];
			$id = \entegre\id();
			if( ! empty( $c[ 'title' ] ) ) {
				$a = \entegre\E( 'a', [ 'href' => "#$id", 'aria-controls' => $id, 'role' => 'tab', 'data-toggle' => 'tab' ] )->child( $c[ 'title' ] );
				$l = [ 'role' => 'presentation' ];
				if( $i == 0 ) {
					$l[ 'class' ] = 'active';
				}
				$x->child( \entegre\E( 'li', $l )->child( $a ) );
			}
			$z = \entegre\E( 'div', [ 'class' => [ 'tab-pane', $i == 0 ? 'active' : null ], 'role' => 'tabpanel', 'id' => $id ] )->child( $c[ 'body' ] );
			if( ! empty( $c[ 'attr' ] ) ) {
				$z->attr( $c[ 'attr' ] );
			}
			$y->child( $z );
		}
		$this->attr( 'class', 'e-' . $this->_type );
		$z = \entegre\E( 'div', $this->a )->child( $x )->child( $y );
		return $z->build();
	}

}

class pills extends tabs {

}

?>