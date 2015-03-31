<?php
/**
 * File for class EzCatalogoStructArrayOfAssociacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfAssociacao originally named ArrayOfAssociacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfAssociacao extends EzCatalogoWsdlClass
{
    /**
     * The Associacao
     * @var EzCatalogoStructAssociacao
     */
    public $Associacao;
    /**
     * Constructor method for ArrayOfAssociacao
     * @see parent::__construct()
     * @param EzCatalogoStructAssociacao $_associacao
     * @return EzCatalogoStructArrayOfAssociacao
     */
    public function __construct($_associacao = NULL)
    {
        parent::__construct(array('Associacao'=>$_associacao),false);
    }
    /**
     * Get Associacao value
     * @return EzCatalogoStructAssociacao|null
     */
    public function getAssociacao()
    {
        return $this->Associacao;
    }
    /**
     * Set Associacao value
     * @param EzCatalogoStructAssociacao $_associacao the Associacao
     * @return EzCatalogoStructAssociacao
     */
    public function setAssociacao($_associacao)
    {
        return ($this->Associacao = $_associacao);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructAssociacao
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructAssociacao
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructAssociacao
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructAssociacao
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructAssociacao
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Associacao
     */
    public function getAttributeName()
    {
        return 'Associacao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfAssociacao
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
