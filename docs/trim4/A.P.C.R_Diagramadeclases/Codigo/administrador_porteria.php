<?php
require_once(realpath(dirname(__FILE__)) . '/mensajeria.php');
require_once(realpath(dirname(__FILE__)) . '/usuario.php');

use mensajeria;
use usuario;

/**
 * @access public
 * @author Aprendiz
 */
class administrador_porteria extends usuario {
	/**
	 * @AttributeType string
	 */
	private $_id_porteria;
	/**
	 * @AttributeType string
	 */
	private $_no_documento;
	/**
	 * @AttributeType mensajeria
	 * /**
	 *  * @AssociationType mensajeria
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_reportar = array();

	/**
	 * @access public
	 */
	public function verificar_disponibilidad() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function confirmacion_recibido_correspodencia() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function operation() {
		// Not yet implemented
	}
}
?>