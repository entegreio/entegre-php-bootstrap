<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;


class pageheader {

	use \entegre\factory\attr;

	private $_primary = null;
	private $_secondary = null;

	public function __construct( $a = null ) {
		$this->attr( $a );
		$this->attr( 'class', 'page-header' );
	}

	public function primary( $x ) {
		if( !empty( $x ) ) {
			$this->_primary = $x;
		}
		return $this;
	}

	public function secondary( $x ) {
		if( !empty( $x ) ) {
			$this->_secondary = $x;
		}
		return $this;
	}

	public function build() {
		$x = E('heading',1)->primary( $this->_primary )->secondary( $this->_secondary );
		return E('div')->attrs($this->a)->child($x)->build();
	}

}

?>