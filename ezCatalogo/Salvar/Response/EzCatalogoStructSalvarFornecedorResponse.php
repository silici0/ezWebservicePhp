<?php
/**
 * File for class EzCatalogoStructSalvarFornecedorResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarFornecedorResponse originally named SalvarFornecedorResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarFornecedorResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarFornecedorResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarFornecedorResult;
    /**
     * Constructor method for SalvarFornecedorResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarFornecedorResult
     * @return EzCatalogoStructSalvarFornecedorResponse
     */
    public function __construct($_salvarFornecedorResult = NULL)
    {
        parent::__construct(array('SalvarFornecedorResult'=>$_salvarFornecedorResult),false);
    }
    /**
     * Get SalvarFornecedorResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarFornecedorResult()
    {
        return $this->SalvarFornecedorResult;
    }
    /**
     * Set SalvarFornecedorResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarFornecedorResult the SalvarFornecedorResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarFornecedorResult($_salvarFornecedorResult)
    {
        return ($this->SalvarFornecedorResult = $_salvarFornecedorResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarFornecedorResponse
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
