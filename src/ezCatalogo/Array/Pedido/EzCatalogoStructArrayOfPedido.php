<?php
/**
 * File for class EzCatalogoStructArrayOfPedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfPedido originally named ArrayOfPedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfPedido extends EzCatalogoWsdlClass
{
    /**
     * The Pedido
     * @var EzCatalogoStructPedido
     */
    public $Pedido;
    /**
     * Constructor method for ArrayOfPedido
     * @see parent::__construct()
     * @param EzCatalogoStructPedido $_pedido
     * @return EzCatalogoStructArrayOfPedido
     */
    public function __construct($_pedido = NULL)
    {
        parent::__construct(array('Pedido'=>$_pedido),false);
    }
    /**
     * Get Pedido value
     * @return EzCatalogoStructPedido|null
     */
    public function getPedido()
    {
        return $this->Pedido;
    }
    /**
     * Set Pedido value
     * @param EzCatalogoStructPedido $_pedido the Pedido
     * @return EzCatalogoStructPedido
     */
    public function setPedido($_pedido)
    {
        return ($this->Pedido = $_pedido);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructPedido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructPedido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructPedido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructPedido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructPedido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Pedido
     */
    public function getAttributeName()
    {
        return 'Pedido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfPedido
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
