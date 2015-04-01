<?php
/**
 * File for class EzPedidosStructCriarPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructCriarPacoteResponse originally named CriarPacoteResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructCriarPacoteResponse extends EzPedidosWsdlClass
{
    /**
     * The CriarPacoteResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $CriarPacoteResult;
    /**
     * Constructor method for CriarPacoteResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_criarPacoteResult
     * @return EzPedidosStructCriarPacoteResponse
     */
    public function __construct($_criarPacoteResult = NULL)
    {
        parent::__construct(array('CriarPacoteResult'=>$_criarPacoteResult),false);
    }
    /**
     * Get CriarPacoteResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getCriarPacoteResult()
    {
        return $this->CriarPacoteResult;
    }
    /**
     * Set CriarPacoteResult value
     * @param EzPedidosStructRespostaProcessamento $_criarPacoteResult the CriarPacoteResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setCriarPacoteResult($_criarPacoteResult)
    {
        return ($this->CriarPacoteResult = $_criarPacoteResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructCriarPacoteResponse
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
