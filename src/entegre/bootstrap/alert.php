<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class alert extends \entegre\factory\node {

	use \entegre\bootstrap\factory\mode;

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'div', $a, $c );
		$this->attr( 'class', 'alert' );
		$this->_prefix = 'alert';
	}

	public function callout( $x ) {
		if( !empty( $x ) ) {
			global $E;
			$this->child( $E->node( 'strong', null, $x ) )->child( ' ' );
		}
		return $this;
	}

}

?>