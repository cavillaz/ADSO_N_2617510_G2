<?php
require_once(realpath(dirname(__FILE__)) . '/mensajes.php');
require_once(realpath(dirname(__FILE__)) . '/reportes.php');
require_once(realpath(dirname(__FILE__)) . '/usuario.php');

use mensajes;
use reportes;
use usuario;

/**
 * @access public
 * @author Aprendiz
 */
class administrador extends usuario {
	/**
	 * @AttributeType string
	 */
	private $_id_admin;
	/**
	 * @AttributeType mensajes
	 * /**
	 *  * @AssociationType mensajes
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_enviar = array();
	/**
	 * @AttributeType reportes
	 * /**
	 *  * @AssociationType reportes
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_verificar = array();

	/**
	 * @access public
	 */
	public function enviar_mensaje() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function crear_reporte() {
		// Not yet implemented
	}
}
?>