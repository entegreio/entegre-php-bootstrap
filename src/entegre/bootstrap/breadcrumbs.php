<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class breadcrumbs {

	use \entegre\factory\attr;

	private $_items = [];

	public function __construct( $a = null ) {
		$this->attr( $a );
	}

	public function crumb( $l, $u = null, $a = false ) {
		$this->_items[] = [ 'url' => $u, 'label' => $l, 'active' => (boolean)$a ];
		return $this;
	}

	public function build() {
		global $E;
		$x = $E->node( 'ol', [ 'class' => 'breadcrumb' ] );
		$x->attr( $this->a );
		foreach( $this->_items as $c ) {
			$l = $E->node( 'li' );
			if( $c['active'] === true ) {
				$l->attr( 'class', 'active' );
				$l->child( $c['label'] );
			} else {
				$l->child( $E->node( 'a', [ 'href' => $c['url'] ], $c['label'] ) );
			}
			$x->child( $l );
		}
		return $x->build();
	}

}

?>