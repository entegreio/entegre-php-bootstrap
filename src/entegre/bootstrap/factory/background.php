<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait background {

	private static $_backgrounds = [ '', 'primary', 'success', 'info', 'warning', 'danger' ];

	public function background( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_backgrounds );
		if( ! empty( $x ) ) {
			$this->attr( 'class', "bg-$x" );
		}
		return $this;
	}

}

?>