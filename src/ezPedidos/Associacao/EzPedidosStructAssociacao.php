<?php
/**
 * File for class EzPedidosStructAssociacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAssociacao originally named Associacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAssociacao extends EzPedidosWsdlClass
{
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * Constructor method for Associacao
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @return EzPedidosStructAssociacao
     */
    public function __construct($_codigoIntegracao = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao),false);
    }
    /**
     * Get CodigoIntegracao value
     * @return string|null
     */
    public function getCodigoIntegracao()
    {
        return $this->CodigoIntegracao;
    }
    /**
     * Set CodigoIntegracao value
     * @param string $_codigoIntegracao the CodigoIntegracao
     * @return string
     */
    public function setCodigoIntegracao($_codigoIntegracao)
    {
        return ($this->CodigoIntegracao = $_codigoIntegracao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAssociacao
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
