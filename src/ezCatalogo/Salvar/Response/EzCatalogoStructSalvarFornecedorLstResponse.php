<?php
/**
 * File for class EzCatalogoStructSalvarFornecedorLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarFornecedorLstResponse originally named SalvarFornecedorLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarFornecedorLstResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarFornecedorLstResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarFornecedorLstResult;
    /**
     * Constructor method for SalvarFornecedorLstResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarFornecedorLstResult
     * @return EzCatalogoStructSalvarFornecedorLstResponse
     */
    public function __construct($_salvarFornecedorLstResult = NULL)
    {
        parent::__construct(array('SalvarFornecedorLstResult'=>$_salvarFornecedorLstResult),false);
    }
    /**
     * Get SalvarFornecedorLstResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarFornecedorLstResult()
    {
        return $this->SalvarFornecedorLstResult;
    }
    /**
     * Set SalvarFornecedorLstResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarFornecedorLstResult the SalvarFornecedorLstResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarFornecedorLstResult($_salvarFornecedorLstResult)
    {
        return ($this->SalvarFornecedorLstResult = $_salvarFornecedorLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarFornecedorLstResponse
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
