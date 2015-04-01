<?php
/**
 * File for class EzPedidosStructAdicionarProdutoPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAdicionarProdutoPacoteResponse originally named AdicionarProdutoPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAdicionarProdutoPacoteResponse extends EzPedidosWsdlClass
{
    /**
     * The AdicionarProdutoPacoteResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AdicionarProdutoPacoteResult;
    /**
     * Constructor method for AdicionarProdutoPacoteResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_adicionarProdutoPacoteResult
     * @return EzPedidosStructAdicionarProdutoPacoteResponse
     */
    public function __construct($_adicionarProdutoPacoteResult = NULL)
    {
        parent::__construct(array('AdicionarProdutoPacoteResult'=>$_adicionarProdutoPacoteResult),false);
    }
    /**
     * Get AdicionarProdutoPacoteResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAdicionarProdutoPacoteResult()
    {
        return $this->AdicionarProdutoPacoteResult;
    }
    /**
     * Set AdicionarProdutoPacoteResult value
     * @param EzPedidosStructRespostaProcessamento $_adicionarProdutoPacoteResult the AdicionarProdutoPacoteResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAdicionarProdutoPacoteResult($_adicionarProdutoPacoteResult)
    {
        return ($this->AdicionarProdutoPacoteResult = $_adicionarProdutoPacoteResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAdicionarProdutoPacoteResponse
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
