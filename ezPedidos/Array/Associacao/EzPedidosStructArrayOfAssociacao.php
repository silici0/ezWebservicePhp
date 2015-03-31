<?php
/**
 * File for class EzPedidosStructArrayOfAssociacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfAssociacao originally named ArrayOfAssociacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfAssociacao extends EzPedidosWsdlClass
{
    /**
     * The Associacao
     * @var EzPedidosStructAssociacao
     */
    public $Associacao;
    /**
     * Constructor method for ArrayOfAssociacao
     * @see parent::__construct()
     * @param EzPedidosStructAssociacao $_associacao
     * @return EzPedidosStructArrayOfAssociacao
     */
    public function __construct($_associacao = NULL)
    {
        parent::__construct(array('Associacao'=>$_associacao),false);
    }
    /**
     * Get Associacao value
     * @return EzPedidosStructAssociacao|null
     */
    public function getAssociacao()
    {
        return $this->Associacao;
    }
    /**
     * Set Associacao value
     * @param EzPedidosStructAssociacao $_associacao the Associacao
     * @return EzPedidosStructAssociacao
     */
    public function setAssociacao($_associacao)
    {
        return ($this->Associacao = $_associacao);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructAssociacao
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructAssociacao
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructAssociacao
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructAssociacao
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructAssociacao
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string Associacao
     */
    public function getAttributeName()
    {
        return 'Associacao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfAssociacao
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
