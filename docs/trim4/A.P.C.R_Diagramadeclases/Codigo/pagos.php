<?php
require_once(realpath(dirname(__FILE__)) . '/residente.php');

use residente;

/**
 * @access public
 * @author Aprendiz
 */
class pagos {
	private $_id_pagos;
	/**
	 * @AttributeType string
	 */
	private $_no_factura;
	/**
	 * @AttributeType string
	 */
	private $_fecha_pago;
	/**
	 * @AttributeType double
	 */
	private $_valor_pago;
	/**
	 * @AttributeType string
	 */
	private $_forma_pago;
	/**
	 * @AttributeType residente
	 * /**
	 *  * @AssociationType residente
	 *  * /
	 */
	public $_unnamed_residente_;
}
?>