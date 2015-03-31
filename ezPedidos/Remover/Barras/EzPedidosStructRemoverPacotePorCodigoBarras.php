<?php
/**
 * File for class EzPedidosStructRemoverPacotePorCodigoBarras
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverPacotePorCodigoBarras originally named RemoverPacotePorCodigoBarras
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverPacotePorCodigoBarras extends EzPedidosWsdlClass
{
    /**
     * The codigoBarras
     * @var string
     */
    public $codigoBarras;
    /**
     * Constructor method for RemoverPacotePorCodigoBarras
     * @see parent::__construct()
     * @param string $_codigoBarras
     * @return EzPedidosStructRemoverPacotePorCodigoBarras
     */
    public function __construct($_codigoBarras = NULL)
    {
        parent::__construct(array('codigoBarras'=>$_codigoBarras),false);
    }
    /**
     * Get codigoBarras value
     * @return string|null
     */
    public function getCodigoBarras()
    {
        return $this->codigoBarras;
    }
    /**
     * Set codigoBarras value
     * @param string $_codigoBarras the codigoBarras
     * @return string
     */
    public function setCodigoBarras($_codigoBarras)
    {
        return ($this->codigoBarras = $_codigoBarras);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverPacotePorCodigoBarras
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
