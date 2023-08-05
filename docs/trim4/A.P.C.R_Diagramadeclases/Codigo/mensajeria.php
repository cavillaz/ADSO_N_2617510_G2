<?php
require_once(realpath(dirname(__FILE__)) . '/administrador_porteria.php');

use administrador_porteria;

/**
 * @access public
 * @author Aprendiz
 */
class mensajeria {
	/**
	 * @AttributeType string
	 */
	private $_recibos_pago_admi;
	/**
	 * @AttributeType string
	 */
	private $_tipo_correspondencia;
	/**
	 * @AttributeType administrador_porteria
	 * /**
	 *  * @AssociationType administrador_porteria
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_reportar;
}
?>