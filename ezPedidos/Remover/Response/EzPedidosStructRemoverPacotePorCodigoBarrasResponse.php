<?php
/**
 * File for class EzPedidosStructRemoverPacotePorCodigoBarrasResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverPacotePorCodigoBarrasResponse originally named RemoverPacotePorCodigoBarrasResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverPacotePorCodigoBarrasResponse extends EzPedidosWsdlClass
{
    /**
     * The RemoverPacotePorCodigoBarrasResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RemoverPacotePorCodigoBarrasResult;
    /**
     * Constructor method for RemoverPacotePorCodigoBarrasResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_removerPacotePorCodigoBarrasResult
     * @return EzPedidosStructRemoverPacotePorCodigoBarrasResponse
     */
    public function __construct($_removerPacotePorCodigoBarrasResult = NULL)
    {
        parent::__construct(array('RemoverPacotePorCodigoBarrasResult'=>$_removerPacotePorCodigoBarrasResult),false);
    }
    /**
     * Get RemoverPacotePorCodigoBarrasResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRemoverPacotePorCodigoBarrasResult()
    {
        return $this->RemoverPacotePorCodigoBarrasResult;
    }
    /**
     * Set RemoverPacotePorCodigoBarrasResult value
     * @param EzPedidosStructRespostaProcessamento $_removerPacotePorCodigoBarrasResult the RemoverPacotePorCodigoBarrasResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRemoverPacotePorCodigoBarrasResult($_removerPacotePorCodigoBarrasResult)
    {
        return ($this->RemoverPacotePorCodigoBarrasResult = $_removerPacotePorCodigoBarrasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverPacotePorCodigoBarrasResponse
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
