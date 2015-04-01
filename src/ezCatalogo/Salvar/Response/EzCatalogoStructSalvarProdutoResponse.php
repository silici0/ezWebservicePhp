<?php
/**
 * File for class EzCatalogoStructSalvarProdutoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarProdutoResponse originally named SalvarProdutoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarProdutoResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarProdutoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarProdutoResult;
    /**
     * Constructor method for SalvarProdutoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarProdutoResult
     * @return EzCatalogoStructSalvarProdutoResponse
     */
    public function __construct($_salvarProdutoResult = NULL)
    {
        parent::__construct(array('SalvarProdutoResult'=>$_salvarProdutoResult),false);
    }
    /**
     * Get SalvarProdutoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarProdutoResult()
    {
        return $this->SalvarProdutoResult;
    }
    /**
     * Set SalvarProdutoResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarProdutoResult the SalvarProdutoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarProdutoResult($_salvarProdutoResult)
    {
        return ($this->SalvarProdutoResult = $_salvarProdutoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarProdutoResponse
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
