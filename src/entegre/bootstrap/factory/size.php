<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait size {

	private static $_sizes = [ 'lg', null, 'sm', 'xs', 'block' ];

	protected $_prefix = null;

	public function size( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_sizes );
		if( ! empty( $x ) ) {
			$this->attr( 'class', $this->_prefix . '-' . $x );
		}
		return $this;
	}

}

?>