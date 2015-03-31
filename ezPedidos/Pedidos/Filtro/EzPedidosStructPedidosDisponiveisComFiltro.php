<?php
/**
 * File for class EzPedidosStructPedidosDisponiveisComFiltro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPedidosDisponiveisComFiltro originally named PedidosDisponiveisComFiltro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPedidosDisponiveisComFiltro extends EzPedidosWsdlClass
{
    /**
     * The filter
     * @var EzPedidosStructPedidoFiltro
     */
    public $filter;
    /**
     * Constructor method for PedidosDisponiveisComFiltro
     * @see parent::__construct()
     * @param EzPedidosStructPedidoFiltro $_filter
     * @return EzPedidosStructPedidosDisponiveisComFiltro
     */
    public function __construct($_filter = NULL)
    {
        parent::__construct(array('filter'=>$_filter),false);
    }
    /**
     * Get filter value
     * @return EzPedidosStructPedidoFiltro|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param EzPedidosStructPedidoFiltro $_filter the filter
     * @return EzPedidosStructPedidoFiltro
     */
    public function setFilter($_filter)
    {
        return ($this->filter = $_filter);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPedidosDisponiveisComFiltro
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
