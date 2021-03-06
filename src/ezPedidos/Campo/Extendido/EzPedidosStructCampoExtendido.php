<?php
/**
 * File for class EzPedidosStructCampoExtendido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructCampoExtendido originally named CampoExtendido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructCampoExtendido extends EzPedidosWsdlClass
{
    /**
     * The Alias
     * @var string
     */
    public $Alias;
    /**
     * The Valor
     * @var string
     */
    public $Valor;
    /**
     * Constructor method for CampoExtendido
     * @see parent::__construct()
     * @param string $_alias
     * @param string $_valor
     * @return EzPedidosStructCampoExtendido
     */
    public function __construct($_alias = NULL,$_valor = NULL)
    {
        parent::__construct(array('Alias'=>$_alias,'Valor'=>$_valor),false);
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $_alias the Alias
     * @return string
     */
    public function setAlias($_alias)
    {
        return ($this->Alias = $_alias);
    }
    /**
     * Get Valor value
     * @return string|null
     */
    public function getValor()
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param string $_valor the Valor
     * @return string
     */
    public function setValor($_valor)
    {
        return ($this->Valor = $_valor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructCampoExtendido
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
