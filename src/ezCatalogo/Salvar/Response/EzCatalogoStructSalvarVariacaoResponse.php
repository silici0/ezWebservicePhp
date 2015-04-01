<?php
/**
 * File for class EzCatalogoStructSalvarVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarVariacaoResponse originally named SalvarVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarVariacaoResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarVariacaoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarVariacaoResult;
    /**
     * Constructor method for SalvarVariacaoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarVariacaoResult
     * @return EzCatalogoStructSalvarVariacaoResponse
     */
    public function __construct($_salvarVariacaoResult = NULL)
    {
        parent::__construct(array('SalvarVariacaoResult'=>$_salvarVariacaoResult),false);
    }
    /**
     * Get SalvarVariacaoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarVariacaoResult()
    {
        return $this->SalvarVariacaoResult;
    }
    /**
     * Set SalvarVariacaoResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarVariacaoResult the SalvarVariacaoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarVariacaoResult($_salvarVariacaoResult)
    {
        return ($this->SalvarVariacaoResult = $_salvarVariacaoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarVariacaoResponse
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
