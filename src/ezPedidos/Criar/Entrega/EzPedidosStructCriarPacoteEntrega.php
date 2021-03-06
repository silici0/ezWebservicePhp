<?php
/**
 * File for class EzPedidosStructCriarPacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructCriarPacoteEntrega originally named CriarPacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructCriarPacoteEntrega extends EzPedidosWsdlClass
{
    /**
     * The pacote
     * @var EzPedidosStructPacoteEntrega
     */
    public $pacote;
    /**
     * Constructor method for CriarPacoteEntrega
     * @see parent::__construct()
     * @param EzPedidosStructPacoteEntrega $_pacote
     * @return EzPedidosStructCriarPacoteEntrega
     */
    public function __construct($_pacote = NULL)
    {
        parent::__construct(array('pacote'=>$_pacote),false);
    }
    /**
     * Get pacote value
     * @return EzPedidosStructPacoteEntrega|null
     */
    public function getPacote()
    {
        return $this->pacote;
    }
    /**
     * Set pacote value
     * @param EzPedidosStructPacoteEntrega $_pacote the pacote
     * @return EzPedidosStructPacoteEntrega
     */
    public function setPacote($_pacote)
    {
        return ($this->pacote = $_pacote);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructCriarPacoteEntrega
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
