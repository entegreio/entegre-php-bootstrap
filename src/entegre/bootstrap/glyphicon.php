<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class glyphicon extends \entegre\factory\node {

	public function __construct( $i = null ) {
		parent::__construct( 'i' );
		$this->attr( 'class', 'glyphicon' );
		$this->icon( $i );
	}

	public function icon( $n = null ) {
		if( !empty( $n ) ) {
			$this->attr( 'class', 'glyphicon-' . trim( strtolower( $n ) ) );
		}
		return $this;
	}

}

?>