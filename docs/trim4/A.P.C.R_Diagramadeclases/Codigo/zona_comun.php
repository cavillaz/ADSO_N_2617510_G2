<?php
require_once(realpath(dirname(__FILE__)) . '/residente.php');

use residente;

/**
 * @access public
 * @author Aprendiz
 */
class zona_comun {
	private $_id_zona;
	/**
	 * @AttributeType string
	 */
	private $_tipo_zona;
	/**
	 * @AttributeType string
	 */
	private $_estado;
	/**
	 * @AttributeType string
	 */
	private $_fecha_solicitud;
	/**
	 * @AttributeType string
	 */
	private $_fecha_uso;
	/**
	 * @AttributeType string
	 */
	private $_hora_entrega;
	/**
	 * @AttributeType string
	 */
	private $_hora_uso;
	/**
	 * @AttributeType residente
	 * /**
	 *  * @AssociationType residente
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_solicitar;
}
?>