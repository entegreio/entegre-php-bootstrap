<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class form extends \entegre\factory\node {

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'form', $a, $c );
	}

	public function horizontal() {
		$this->attr( 'class', 'form-horizontal' );
		return $this;
	}

	public function inline() {
		$this->attr( 'class', 'form-inline' );
		return $this;
	}

}

?>