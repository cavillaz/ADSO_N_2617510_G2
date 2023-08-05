<?php
require_once(realpath(dirname(__FILE__)) . '/comunal.php');
require_once(realpath(dirname(__FILE__)) . '/visitante.php');
require_once(realpath(dirname(__FILE__)) . '/residente.php');

use comunal;
use visitante;
use residente;

/**
 * @access public
 * @author Aprendiz
 */
class parqueadero {
	/**
	 * @AttributeType string
	 */
	private $_placa;
	/**
	 * @AttributeType string
	 */
	private $_tipo_vehiclo;
	/**
	 * @AttributeType string
	 */
	private $_modelo;
	/**
	 * @AttributeType comunal
	 * /**
	 *  * @AssociationType comunal
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_comunal_4;
	/**
	 * @AttributeType visitante
	 * /**
	 *  * @AssociationType visitante
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_visitante_5;
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