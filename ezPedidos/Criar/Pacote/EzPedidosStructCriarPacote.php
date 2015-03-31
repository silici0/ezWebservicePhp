<?php
/**
 * File for class EzPedidosStructCriarPacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructCriarPacote originally named CriarPacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructCriarPacote extends EzPedidosWsdlClass
{
    /**
     * The pacote
     * @var EzPedidosStructPacote
     */
    public $pacote;
    /**
     * Constructor method for CriarPacote
     * @see parent::__construct()
     * @param EzPedidosStructPacote $_pacote
     * @return EzPedidosStructCriarPacote
     */
    public function __construct($_pacote = NULL)
    {
        parent::__construct(array('pacote'=>$_pacote),false);
    }
    /**
     * Get pacote value
     * @return EzPedidosStructPacote|null
     */
    public function getPacote()
    {
        return $this->pacote;
    }
    /**
     * Set pacote value
     * @param EzPedidosStructPacote $_pacote the pacote
     * @return EzPedidosStructPacote
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
     * @return EzPedidosStructCriarPacote
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
