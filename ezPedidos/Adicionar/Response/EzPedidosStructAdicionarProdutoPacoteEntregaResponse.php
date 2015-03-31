<?php
/**
 * File for class EzPedidosStructAdicionarProdutoPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAdicionarProdutoPacoteEntregaResponse originally named AdicionarProdutoPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAdicionarProdutoPacoteEntregaResponse extends EzPedidosWsdlClass
{
    /**
     * The AdicionarProdutoPacoteEntregaResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AdicionarProdutoPacoteEntregaResult;
    /**
     * Constructor method for AdicionarProdutoPacoteEntregaResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_adicionarProdutoPacoteEntregaResult
     * @return EzPedidosStructAdicionarProdutoPacoteEntregaResponse
     */
    public function __construct($_adicionarProdutoPacoteEntregaResult = NULL)
    {
        parent::__construct(array('AdicionarProdutoPacoteEntregaResult'=>$_adicionarProdutoPacoteEntregaResult),false);
    }
    /**
     * Get AdicionarProdutoPacoteEntregaResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAdicionarProdutoPacoteEntregaResult()
    {
        return $this->AdicionarProdutoPacoteEntregaResult;
    }
    /**
     * Set AdicionarProdutoPacoteEntregaResult value
     * @param EzPedidosStructRespostaProcessamento $_adicionarProdutoPacoteEntregaResult the AdicionarProdutoPacoteEntregaResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAdicionarProdutoPacoteEntregaResult($_adicionarProdutoPacoteEntregaResult)
    {
        return ($this->AdicionarProdutoPacoteEntregaResult = $_adicionarProdutoPacoteEntregaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAdicionarProdutoPacoteEntregaResponse
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
