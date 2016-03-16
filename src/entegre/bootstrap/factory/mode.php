<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait mode {

	private static $_modes = [ 'default', 'primary', 'success', 'info', 'warning', 'danger', 'link' ];

	protected $_prefix = null;

	public function mode( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_modes );
		if( ! empty( $x ) ) {
			$this->attr( 'class', $this->_prefix . '-' . $x );
		}
		return $this;
	}

}

?>