<?php

/**
 * @package entegre-bootstrap
 * @subpackage bootstrap
 * @author James Linden <kodekrash@gmail.com>
 * @copyright 2016 James Linden
 * @license MIT
 */
namespace entegre\bootstrap;

class table {
	
	use \entegre\factory\attr;

	protected $_header = [];

	protected $_row = [];

	private $_mode = [];

	private $_hover = false;

	private $_footer = false;

	public function __construct( $a = null ) {
		$this->attr( $a );
	}

	public function mode( $x ) {
		$x = trim( strtolower( $x ) );
		if( in_array( $x, [ null, 'condensed', 'striped', 'bordered' ] ) ) {
			$this->_mode[] = $x;
		}
		return $this;
	}

	public function hover() {
		$this->_hover = true;
		return $this;
	}

	public function footer() {
		$this->_footer = true;
		return $this;
	}

	public function headers( $d ) {
		if( ap( $d ) ) {
			$this->_header = $d;
		}
		return $this;
	}

	public function header( $d ) {
		$this->_header[] = $d;
		return $this;
	}

	public function rows( $d ) {
		if( ap( $d ) ) {
			$this->_row = $d;
		}
		return $this;
	}

	public function row( $d ) {
		if( ap( $d ) ) {
			$this->_row[] = $d;
		}
		return $this;
	}

	public function build() {
		$t = \entegre\E( 'table', [ 'class' => 'table' ] );
		$t->attr( $this->a );
		if( $this->_hover ) {
			$t->attr( 'class', 'table-hover' );
		}
		if( ap( $this->_mode ) ) {
			$t->attr( 'class', 'table-' . implode( ' table-', $this->_mode ) );
		}
		$tf = null;
		if( ap( $this->_header ) ) {
			$x = [];
			foreach( $this->_header as $h ) {
				$x[] = \entegre\E( 'th' )->child( $h );
			}
			$t->child( \entegre\E( 'thead' )->child( $x ) );
			if( $this->_footer ) {
				$tf = \entegre\E( 'tfoot' )->child( $x );
			}
		}
		if( ap( $this->_row ) ) {
			$tb = \entegre\E( 'tbody' );
			foreach( $this->_row as $r ) {
				$tr = \entegre\E( 'tr' );
				foreach( $r as $c ) {
					$tr->child( \entegre\E( 'td' )->child( $c ) );
				}
				$tb->child( $tr );
			}
			$t->child( $tb );
		}
		if( ! empty( $tf ) ) {
			$t->child( $tf );
		}
		return $t->build();
	}

}

?>