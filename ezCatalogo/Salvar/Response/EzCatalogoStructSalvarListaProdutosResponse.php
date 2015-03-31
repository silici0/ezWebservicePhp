<?php
/**
 * File for class EzCatalogoStructSalvarListaProdutosResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarListaProdutosResponse originally named SalvarListaProdutosResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarListaProdutosResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarListaProdutosResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarListaProdutosResult;
    /**
     * Constructor method for SalvarListaProdutosResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarListaProdutosResult
     * @return EzCatalogoStructSalvarListaProdutosResponse
     */
    public function __construct($_salvarListaProdutosResult = NULL)
    {
        parent::__construct(array('SalvarListaProdutosResult'=>$_salvarListaProdutosResult),false);
    }
    /**
     * Get SalvarListaProdutosResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarListaProdutosResult()
    {
        return $this->SalvarListaProdutosResult;
    }
    /**
     * Set SalvarListaProdutosResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarListaProdutosResult the SalvarListaProdutosResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarListaProdutosResult($_salvarListaProdutosResult)
    {
        return ($this->SalvarListaProdutosResult = $_salvarListaProdutosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarListaProdutosResponse
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
