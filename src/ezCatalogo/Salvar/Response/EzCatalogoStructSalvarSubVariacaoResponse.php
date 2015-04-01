<?php
/**
 * File for class EzCatalogoStructSalvarSubVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarSubVariacaoResponse originally named SalvarSubVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarSubVariacaoResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarSubVariacaoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarSubVariacaoResult;
    /**
     * Constructor method for SalvarSubVariacaoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarSubVariacaoResult
     * @return EzCatalogoStructSalvarSubVariacaoResponse
     */
    public function __construct($_salvarSubVariacaoResult = NULL)
    {
        parent::__construct(array('SalvarSubVariacaoResult'=>$_salvarSubVariacaoResult),false);
    }
    /**
     * Get SalvarSubVariacaoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarSubVariacaoResult()
    {
        return $this->SalvarSubVariacaoResult;
    }
    /**
     * Set SalvarSubVariacaoResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarSubVariacaoResult the SalvarSubVariacaoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarSubVariacaoResult($_salvarSubVariacaoResult)
    {
        return ($this->SalvarSubVariacaoResult = $_salvarSubVariacaoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarSubVariacaoResponse
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
