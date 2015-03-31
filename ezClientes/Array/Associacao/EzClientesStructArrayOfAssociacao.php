<?php
/**
 * File for class EzClientesStructArrayOfAssociacao
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfAssociacao originally named ArrayOfAssociacao
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfAssociacao extends EzClientesWsdlClass
{
    /**
     * The Associacao
     * @var EzClientesStructAssociacao
     */
    public $Associacao;
    /**
     * Constructor method for ArrayOfAssociacao
     * @see parent::__construct()
     * @param EzClientesStructAssociacao $_associacao
     * @return EzClientesStructArrayOfAssociacao
     */
    public function __construct($_associacao = NULL)
    {
        parent::__construct(array('Associacao'=>$_associacao),false);
    }
    /**
     * Get Associacao value
     * @return EzClientesStructAssociacao|null
     */
    public function getAssociacao()
    {
        return $this->Associacao;
    }
    /**
     * Set Associacao value
     * @param EzClientesStructAssociacao $_associacao the Associacao
     * @return EzClientesStructAssociacao
     */
    public function setAssociacao($_associacao)
    {
        return ($this->Associacao = $_associacao);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructAssociacao
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructAssociacao
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructAssociacao
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructAssociacao
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructAssociacao
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string Associacao
     */
    public function getAttributeName()
    {
        return 'Associacao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfAssociacao
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
