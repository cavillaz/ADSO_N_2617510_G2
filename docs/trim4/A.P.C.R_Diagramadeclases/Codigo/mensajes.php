<?php
require_once(realpath(dirname(__FILE__)) . '/administrador.php');

use administrador;

/**
 * @access public
 * @author Aprendiz
 */
class mensajes {
	private $_id_mensajes;
	/**
	 * @AttributeType string
	 */
	private $_mensaje_masivo;
	/**
	 * @AttributeType string
	 */
	private $_mensaje_administratvo;
	private $_fecha_envio;
	/**
	 * @AttributeType administrador
	 * /**
	 *  * @AssociationType administrador
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_enviar;
}
?>