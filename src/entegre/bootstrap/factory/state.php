<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait state {

	private static $_states = [ '', 'disabled', 'active' ];

	public function mode( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_states );
		if( ! empty( $x ) ) {
			$this->attr( 'class', $x );
		}
		return $this;
	}

}

?>