<?php

/**
 * @package entegre-bootstrap
 * @subpackage Factories
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap\factory;

trait alignment {

	private static $_alignments = [ '', 'left', 'center', 'right', 'justify', 'nowrap' ];

	public function alignment( $value = null, $default = null ) {
		$x = \entegre\optionselect( $value, $default, self::$_alignments );
		if( ! empty( $x ) ) {
			$this->attr( 'class', "text-$x" );
		}
		return $this;
	}

}

?>