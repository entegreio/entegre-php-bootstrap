<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;


class p extends \entegre\factory\node {

	use \entegre\bootstrap\factory\typography;

	public function lead() {
		$this->attr( 'class', 'lead' );
		return $this;
	}

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'p', $a, $c );
	}

}

?>