<?php
/**
 * File for class EzClientesStructArrayOfListaProdutosLista
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfListaProdutosLista originally named ArrayOfListaProdutosLista
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfListaProdutosLista extends EzClientesWsdlClass
{
    /**
     * The ListaProdutosLista
     * @var EzClientesStructListaProdutosLista
     */
    public $ListaProdutosLista;
    /**
     * Constructor method for ArrayOfListaProdutosLista
     * @see parent::__construct()
     * @param EzClientesStructListaProdutosLista $_listaProdutosLista
     * @return EzClientesStructArrayOfListaProdutosLista
     */
    public function __construct($_listaProdutosLista = NULL)
    {
        parent::__construct(array('ListaProdutosLista'=>$_listaProdutosLista),false);
    }
    /**
     * Get ListaProdutosLista value
     * @return EzClientesStructListaProdutosLista|null
     */
    public function getListaProdutosLista()
    {
        return $this->ListaProdutosLista;
    }
    /**
     * Set ListaProdutosLista value
     * @param EzClientesStructListaProdutosLista $_listaProdutosLista the ListaProdutosLista
     * @return EzClientesStructListaProdutosLista
     */
    public function setListaProdutosLista($_listaProdutosLista)
    {
        return ($this->ListaProdutosLista = $_listaProdutosLista);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructListaProdutosLista
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructListaProdutosLista
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructListaProdutosLista
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructListaProdutosLista
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructListaProdutosLista
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string ListaProdutosLista
     */
    public function getAttributeName()
    {
        return 'ListaProdutosLista';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfListaProdutosLista
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
