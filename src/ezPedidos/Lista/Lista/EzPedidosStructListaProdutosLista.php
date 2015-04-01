<?php
/**
 * File for class EzPedidosStructListaProdutosLista
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructListaProdutosLista originally named ListaProdutosLista
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructListaProdutosLista extends EzPedidosWsdlClass
{
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * The ListaID
     * @var int
     */
    public $ListaID;
    /**
     * Constructor method for ListaProdutosLista
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @param int $_listaID
     * @return EzPedidosStructListaProdutosLista
     */
    public function __construct($_codigoIntegracao = NULL,$_listaID = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao,'ListaID'=>$_listaID),false);
    }
    /**
     * Get CodigoIntegracao value
     * @return string|null
     */
    public function getCodigoIntegracao()
    {
        return $this->CodigoIntegracao;
    }
    /**
     * Set CodigoIntegracao value
     * @param string $_codigoIntegracao the CodigoIntegracao
     * @return string
     */
    public function setCodigoIntegracao($_codigoIntegracao)
    {
        return ($this->CodigoIntegracao = $_codigoIntegracao);
    }
    /**
     * Get ListaID value
     * @return int|null
     */
    public function getListaID()
    {
        return $this->ListaID;
    }
    /**
     * Set ListaID value
     * @param int $_listaID the ListaID
     * @return int
     */
    public function setListaID($_listaID)
    {
        return ($this->ListaID = $_listaID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructListaProdutosLista
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
