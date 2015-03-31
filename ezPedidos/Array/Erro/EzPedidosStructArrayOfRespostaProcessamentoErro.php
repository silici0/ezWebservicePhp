<?php
/**
 * File for class EzPedidosStructArrayOfRespostaProcessamentoErro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfRespostaProcessamentoErro originally named ArrayOfRespostaProcessamentoErro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfRespostaProcessamentoErro extends EzPedidosWsdlClass
{
    /**
     * The RespostaProcessamentoErro
     * @var EzPedidosStructRespostaProcessamentoErro
     */
    public $RespostaProcessamentoErro;
    /**
     * Constructor method for ArrayOfRespostaProcessamentoErro
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamentoErro $_respostaProcessamentoErro
     * @return EzPedidosStructArrayOfRespostaProcessamentoErro
     */
    public function __construct($_respostaProcessamentoErro = NULL)
    {
        parent::__construct(array('RespostaProcessamentoErro'=>$_respostaProcessamentoErro),false);
    }
    /**
     * Get RespostaProcessamentoErro value
     * @return EzPedidosStructRespostaProcessamentoErro|null
     */
    public function getRespostaProcessamentoErro()
    {
        return $this->RespostaProcessamentoErro;
    }
    /**
     * Set RespostaProcessamentoErro value
     * @param EzPedidosStructRespostaProcessamentoErro $_respostaProcessamentoErro the RespostaProcessamentoErro
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function setRespostaProcessamentoErro($_respostaProcessamentoErro)
    {
        return ($this->RespostaProcessamentoErro = $_respostaProcessamentoErro);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructRespostaProcessamentoErro
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string RespostaProcessamentoErro
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamentoErro';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfRespostaProcessamentoErro
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
