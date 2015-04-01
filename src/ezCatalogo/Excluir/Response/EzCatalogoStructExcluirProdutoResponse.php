<?php
/**
 * File for class EzCatalogoStructExcluirProdutoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirProdutoResponse originally named ExcluirProdutoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirProdutoResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirProdutoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirProdutoResult;
    /**
     * Constructor method for ExcluirProdutoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirProdutoResult
     * @return EzCatalogoStructExcluirProdutoResponse
     */
    public function __construct($_excluirProdutoResult = NULL)
    {
        parent::__construct(array('ExcluirProdutoResult'=>$_excluirProdutoResult),false);
    }
    /**
     * Get ExcluirProdutoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirProdutoResult()
    {
        return $this->ExcluirProdutoResult;
    }
    /**
     * Set ExcluirProdutoResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirProdutoResult the ExcluirProdutoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirProdutoResult($_excluirProdutoResult)
    {
        return ($this->ExcluirProdutoResult = $_excluirProdutoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirProdutoResponse
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
