<?php
/**
 * File for class EzCatalogoStructExcluirFornecedorResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirFornecedorResponse originally named ExcluirFornecedorResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirFornecedorResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirFornecedorResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirFornecedorResult;
    /**
     * Constructor method for ExcluirFornecedorResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirFornecedorResult
     * @return EzCatalogoStructExcluirFornecedorResponse
     */
    public function __construct($_excluirFornecedorResult = NULL)
    {
        parent::__construct(array('ExcluirFornecedorResult'=>$_excluirFornecedorResult),false);
    }
    /**
     * Get ExcluirFornecedorResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirFornecedorResult()
    {
        return $this->ExcluirFornecedorResult;
    }
    /**
     * Set ExcluirFornecedorResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirFornecedorResult the ExcluirFornecedorResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirFornecedorResult($_excluirFornecedorResult)
    {
        return ($this->ExcluirFornecedorResult = $_excluirFornecedorResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirFornecedorResponse
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
