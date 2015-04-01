<?php
/**
 * File for class EzPedidosStructCriarPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructCriarPacoteEntregaResponse originally named CriarPacoteEntregaResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructCriarPacoteEntregaResponse extends EzPedidosWsdlClass
{
    /**
     * The CriarPacoteEntregaResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $CriarPacoteEntregaResult;
    /**
     * Constructor method for CriarPacoteEntregaResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_criarPacoteEntregaResult
     * @return EzPedidosStructCriarPacoteEntregaResponse
     */
    public function __construct($_criarPacoteEntregaResult = NULL)
    {
        parent::__construct(array('CriarPacoteEntregaResult'=>$_criarPacoteEntregaResult),false);
    }
    /**
     * Get CriarPacoteEntregaResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getCriarPacoteEntregaResult()
    {
        return $this->CriarPacoteEntregaResult;
    }
    /**
     * Set CriarPacoteEntregaResult value
     * @param EzPedidosStructRespostaProcessamento $_criarPacoteEntregaResult the CriarPacoteEntregaResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setCriarPacoteEntregaResult($_criarPacoteEntregaResult)
    {
        return ($this->CriarPacoteEntregaResult = $_criarPacoteEntregaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructCriarPacoteEntregaResponse
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
