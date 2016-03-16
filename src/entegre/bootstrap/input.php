<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class input extends \entegre\factory\node {

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'input', $a, $c );
		$this->attr( 'class', 'form-control' );
	}

}

?>