<?php
/**
 * File for class EzPedidosStructRemoverProdutoPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverProdutoPacoteEntregaResponse originally named RemoverProdutoPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverProdutoPacoteEntregaResponse extends EzPedidosWsdlClass
{
    /**
     * The RemoverProdutoPacoteEntregaResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RemoverProdutoPacoteEntregaResult;
    /**
     * Constructor method for RemoverProdutoPacoteEntregaResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_removerProdutoPacoteEntregaResult
     * @return EzPedidosStructRemoverProdutoPacoteEntregaResponse
     */
    public function __construct($_removerProdutoPacoteEntregaResult = NULL)
    {
        parent::__construct(array('RemoverProdutoPacoteEntregaResult'=>$_removerProdutoPacoteEntregaResult),false);
    }
    /**
     * Get RemoverProdutoPacoteEntregaResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRemoverProdutoPacoteEntregaResult()
    {
        return $this->RemoverProdutoPacoteEntregaResult;
    }
    /**
     * Set RemoverProdutoPacoteEntregaResult value
     * @param EzPedidosStructRespostaProcessamento $_removerProdutoPacoteEntregaResult the RemoverProdutoPacoteEntregaResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRemoverProdutoPacoteEntregaResult($_removerProdutoPacoteEntregaResult)
    {
        return ($this->RemoverProdutoPacoteEntregaResult = $_removerProdutoPacoteEntregaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverProdutoPacoteEntregaResponse
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
