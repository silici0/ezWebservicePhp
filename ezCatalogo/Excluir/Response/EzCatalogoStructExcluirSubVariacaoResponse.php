<?php
/**
 * File for class EzCatalogoStructExcluirSubVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirSubVariacaoResponse originally named ExcluirSubVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirSubVariacaoResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirSubVariacaoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirSubVariacaoResult;
    /**
     * Constructor method for ExcluirSubVariacaoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirSubVariacaoResult
     * @return EzCatalogoStructExcluirSubVariacaoResponse
     */
    public function __construct($_excluirSubVariacaoResult = NULL)
    {
        parent::__construct(array('ExcluirSubVariacaoResult'=>$_excluirSubVariacaoResult),false);
    }
    /**
     * Get ExcluirSubVariacaoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirSubVariacaoResult()
    {
        return $this->ExcluirSubVariacaoResult;
    }
    /**
     * Set ExcluirSubVariacaoResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirSubVariacaoResult the ExcluirSubVariacaoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirSubVariacaoResult($_excluirSubVariacaoResult)
    {
        return ($this->ExcluirSubVariacaoResult = $_excluirSubVariacaoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirSubVariacaoResponse
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
