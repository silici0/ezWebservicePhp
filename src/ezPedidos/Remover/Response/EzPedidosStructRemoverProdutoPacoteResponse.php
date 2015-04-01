<?php
/**
 * File for class EzPedidosStructRemoverProdutoPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverProdutoPacoteResponse originally named RemoverProdutoPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverProdutoPacoteResponse extends EzPedidosWsdlClass
{
    /**
     * The RemoverProdutoPacoteResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RemoverProdutoPacoteResult;
    /**
     * Constructor method for RemoverProdutoPacoteResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_removerProdutoPacoteResult
     * @return EzPedidosStructRemoverProdutoPacoteResponse
     */
    public function __construct($_removerProdutoPacoteResult = NULL)
    {
        parent::__construct(array('RemoverProdutoPacoteResult'=>$_removerProdutoPacoteResult),false);
    }
    /**
     * Get RemoverProdutoPacoteResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRemoverProdutoPacoteResult()
    {
        return $this->RemoverProdutoPacoteResult;
    }
    /**
     * Set RemoverProdutoPacoteResult value
     * @param EzPedidosStructRespostaProcessamento $_removerProdutoPacoteResult the RemoverProdutoPacoteResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRemoverProdutoPacoteResult($_removerProdutoPacoteResult)
    {
        return ($this->RemoverProdutoPacoteResult = $_removerProdutoPacoteResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverProdutoPacoteResponse
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
