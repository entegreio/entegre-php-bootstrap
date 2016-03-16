<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */

namespace entegre\bootstrap;

class page extends \entegre\factory\page {

	public function __construct( $attr = null ) {
		parent::__construct( $attr );
		$this->style( 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
		$this->script( 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', true );
	}

	public function theme( $name = null ) {
		if( !empty( $name ) ) {
			$name = trim( strtolower( $name ) );
			$tl = [ 'cerulean', 'cosmo', 'cyborg', 'darkly', 'flatly', 'journal', 'lumen', 'paper', 'readable', 'sandstone', 'simplex', 'slate', 'spacelab', 'superhero', 'united', 'yeti' ];
			if( in_array( $name, [ 'base',  'bootstrap' ] ) ) {
				$this->style( 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' );
			} else if( in_array( $name, $tl ) ) {
				$this->style( 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/' . $name . '/bootstrap.min.css' );
			}
		}
		return $this;
	}

	public function custom_head() {
		$x = [
			'<!--[if lt IE 9]>',
			new \entegre\factory\node( 'script', [ 'src' => 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' ] ),
			new \entegre\factory\node( 'script', [ 'src' => 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' ] ),
			'<![endif]-->'
		];
		return $x;
	}

}

?>