<?php
require_once(realpath(dirname(__FILE__)) . '/administrador.php');

use administrador;

/**
 * @access public
 * @author Aprendiz
 */
class reportes {
	private $_id_reportes;
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
	private $_hora_pago;
	/**
	 * @AttributeType string
	 */
	private $_items_pago;
	/**
	 * @AttributeType administrador
	 * /**
	 *  * @AssociationType administrador
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_verificar;
}
?>