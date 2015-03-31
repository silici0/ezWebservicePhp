<?php
/**
 * File for class EzPedidosStructArrayOfListaProdutosLista
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfListaProdutosLista originally named ArrayOfListaProdutosLista
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfListaProdutosLista extends EzPedidosWsdlClass
{
    /**
     * The ListaProdutosLista
     * @var EzPedidosStructListaProdutosLista
     */
    public $ListaProdutosLista;
    /**
     * Constructor method for ArrayOfListaProdutosLista
     * @see parent::__construct()
     * @param EzPedidosStructListaProdutosLista $_listaProdutosLista
     * @return EzPedidosStructArrayOfListaProdutosLista
     */
    public function __construct($_listaProdutosLista = NULL)
    {
        parent::__construct(array('ListaProdutosLista'=>$_listaProdutosLista),false);
    }
    /**
     * Get ListaProdutosLista value
     * @return EzPedidosStructListaProdutosLista|null
     */
    public function getListaProdutosLista()
    {
        return $this->ListaProdutosLista;
    }
    /**
     * Set ListaProdutosLista value
     * @param EzPedidosStructListaProdutosLista $_listaProdutosLista the ListaProdutosLista
     * @return EzPedidosStructListaProdutosLista
     */
    public function setListaProdutosLista($_listaProdutosLista)
    {
        return ($this->ListaProdutosLista = $_listaProdutosLista);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructListaProdutosLista
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructListaProdutosLista
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructListaProdutosLista
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructListaProdutosLista
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructListaProdutosLista
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string ListaProdutosLista
     */
    public function getAttributeName()
    {
        return 'ListaProdutosLista';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfListaProdutosLista
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
