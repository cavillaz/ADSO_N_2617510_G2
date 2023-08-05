<?php
require_once(realpath(dirname(__FILE__)) . '/parqueadero.php');

use parqueadero;

/**
 * @access public
 * @author Aprendiz
 */
class visitante {
	/**
	 * @AttributeType string
	 */
	private $_fecha_solicitud;
	/**
	 * @AttributeType string
	 */
	private $_id_ubicacion_vis;
	/**
	 * @AttributeType string
	 */
	private $_fecha_uso;
	/**
	 * @AttributeType string
	 */
	private $_hora_uso;
	/**
	 * @AttributeType string
	 */
	private $_hora_entrega;
	/**
	 * @AttributeType parqueadero
	 * /**
	 *  * @AssociationType parqueadero
	 *  * /
	 */
	public $_unnamed_parqueadero_;
}
?>