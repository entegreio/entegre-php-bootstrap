<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait textcase {

	private static $_textcases = [ '', 'uppercase', 'lowercase', 'capitalize' ];

	public function textcase( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_textcases );
		if( ! empty( $x ) ) {
			$this->attr( 'class', "text-$x" );
		}
		return $this;
	}

}

?>