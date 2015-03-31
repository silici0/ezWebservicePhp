<?php
/**
 * File for class EzCatalogoStructArrayOfPedidoAcompanhamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfPedidoAcompanhamento originally named ArrayOfPedidoAcompanhamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfPedidoAcompanhamento extends EzCatalogoWsdlClass
{
    /**
     * The PedidoAcompanhamento
     * @var EzCatalogoStructPedidoAcompanhamento
     */
    public $PedidoAcompanhamento;
    /**
     * Constructor method for ArrayOfPedidoAcompanhamento
     * @see parent::__construct()
     * @param EzCatalogoStructPedidoAcompanhamento $_pedidoAcompanhamento
     * @return EzCatalogoStructArrayOfPedidoAcompanhamento
     */
    public function __construct($_pedidoAcompanhamento = NULL)
    {
        parent::__construct(array('PedidoAcompanhamento'=>$_pedidoAcompanhamento),false);
    }
    /**
     * Get PedidoAcompanhamento value
     * @return EzCatalogoStructPedidoAcompanhamento|null
     */
    public function getPedidoAcompanhamento()
    {
        return $this->PedidoAcompanhamento;
    }
    /**
     * Set PedidoAcompanhamento value
     * @param EzCatalogoStructPedidoAcompanhamento $_pedidoAcompanhamento the PedidoAcompanhamento
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function setPedidoAcompanhamento($_pedidoAcompanhamento)
    {
        return ($this->PedidoAcompanhamento = $_pedidoAcompanhamento);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructPedidoAcompanhamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string PedidoAcompanhamento
     */
    public function getAttributeName()
    {
        return 'PedidoAcompanhamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfPedidoAcompanhamento
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
