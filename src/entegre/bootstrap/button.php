<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class button extends \entegre\factory\node {

	use \entegre\bootstrap\factory\mode;
	use \entegre\bootstrap\factory\size;

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'button', $a, $c );
		$this->attr( 'class', 'btn' );
		$this->attr( 'type', 'button' );
		$this->_prefix = 'btn';
	}

}

?>