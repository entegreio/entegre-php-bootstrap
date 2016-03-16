<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class well extends \entegre\factory\node {

	use \entegre\bootstrap\factory\size;

	public function __construct( $a = null, $c = null ) {
		parent::__construct( 'div', $a, $c );
		$this->attr( 'class', 'well' );
		$this->_prefix = 'well';
	}

}

?>