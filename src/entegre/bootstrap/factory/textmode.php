<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait textmode {

	private static $_textmodes = [ '', 'muted', 'primary', 'success', 'info', 'warning', 'danger' ];

	public function textmode( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_textmodes );
		if( ! empty( $x ) ) {
			$this->attr( 'class', "text-$x" );
		}
		return $this;
	}

}

?>