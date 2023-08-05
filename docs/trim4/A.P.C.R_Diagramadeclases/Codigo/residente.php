<?php
require_once(realpath(dirname(__FILE__)) . '/parqueadero.php');
require_once(realpath(dirname(__FILE__)) . '/pagos.php');
require_once(realpath(dirname(__FILE__)) . '/usuario.php');

use parqueadero;
use pagos;
use usuario;

/**
 * @access public
 * @author Aprendiz
 */
class residente extends usuario {
	/**
	 * @AttributeType string
	 */
	private $_id_residente;
	/**
	 * @AttributeType string
	 */
	private $_no_documento;
	/**
	 * @AttributeType string
	 */
	private $_torre;
	/**
	 * @AttributeType string
	 */
	private $_apto;
	/**
	 * @AttributeType string
	 */
	private $_correo_electronico;
	/**
	 * @AttributeType parqueadero
	 * /**
	 *  * @AssociationType parqueadero
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_solicitar = array();
	/**
	 * @AttributeType pagos
	 * /**
	 *  * @AssociationType pagos
	 *  * @AssociationMultiplicity 1..*
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_pagos_ = array();

	/**
	 * @access public
	 */
	public function soliciar() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function pagar() {
		// Not yet implemented
	}
}
?>