<?php
/**
 * File for class EzCatalogoStructArrayOfListaProdutosLista
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfListaProdutosLista originally named ArrayOfListaProdutosLista
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfListaProdutosLista extends EzCatalogoWsdlClass
{
    /**
     * The ListaProdutosLista
     * @var EzCatalogoStructListaProdutosLista
     */
    public $ListaProdutosLista;
    /**
     * Constructor method for ArrayOfListaProdutosLista
     * @see parent::__construct()
     * @param EzCatalogoStructListaProdutosLista $_listaProdutosLista
     * @return EzCatalogoStructArrayOfListaProdutosLista
     */
    public function __construct($_listaProdutosLista = NULL)
    {
        parent::__construct(array('ListaProdutosLista'=>$_listaProdutosLista),false);
    }
    /**
     * Get ListaProdutosLista value
     * @return EzCatalogoStructListaProdutosLista|null
     */
    public function getListaProdutosLista()
    {
        return $this->ListaProdutosLista;
    }
    /**
     * Set ListaProdutosLista value
     * @param EzCatalogoStructListaProdutosLista $_listaProdutosLista the ListaProdutosLista
     * @return EzCatalogoStructListaProdutosLista
     */
    public function setListaProdutosLista($_listaProdutosLista)
    {
        return ($this->ListaProdutosLista = $_listaProdutosLista);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructListaProdutosLista
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructListaProdutosLista
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructListaProdutosLista
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructListaProdutosLista
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructListaProdutosLista
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string ListaProdutosLista
     */
    public function getAttributeName()
    {
        return 'ListaProdutosLista';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfListaProdutosLista
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
