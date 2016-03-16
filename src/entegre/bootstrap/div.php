<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class div extends \entegre\factory\node {

	use \entegre\bootstrap\factory\typography;

	protected static $_columns = [ 'xs', 'sm', 'md', 'lg' ];

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'div', $a, $c );
	}

	public function column( $g, $s = 12 ) {
		$g = trim( strtolower( $g ) );
		$s = (integer)$s;
		if( in_array( $g, self::$_columns ) && $s >= 1 && $s <= 12 ) {
			$this->attr( 'class', "col-$g-$s" );
		}
		return $this;
	}

	public function offset( $g, $s = 12 ) {
		$g = trim( strtolower( $g ) );
		$s = (integer)$s;
		if( in_array( $g, self::$_columns ) && $s >= 1 && $s <= 12 ) {
			$this->attr( 'class', "col-$g-offset-$s" );
		}
		return $this;
	}

}

?>