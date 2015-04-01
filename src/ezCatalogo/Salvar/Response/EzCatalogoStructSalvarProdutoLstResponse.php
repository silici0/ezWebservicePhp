<?php
/**
 * File for class EzCatalogoStructSalvarProdutoLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarProdutoLstResponse originally named SalvarProdutoLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarProdutoLstResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarProdutoLstResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarProdutoLstResult;
    /**
     * Constructor method for SalvarProdutoLstResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarProdutoLstResult
     * @return EzCatalogoStructSalvarProdutoLstResponse
     */
    public function __construct($_salvarProdutoLstResult = NULL)
    {
        parent::__construct(array('SalvarProdutoLstResult'=>$_salvarProdutoLstResult),false);
    }
    /**
     * Get SalvarProdutoLstResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarProdutoLstResult()
    {
        return $this->SalvarProdutoLstResult;
    }
    /**
     * Set SalvarProdutoLstResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarProdutoLstResult the SalvarProdutoLstResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarProdutoLstResult($_salvarProdutoLstResult)
    {
        return ($this->SalvarProdutoLstResult = $_salvarProdutoLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarProdutoLstResponse
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
