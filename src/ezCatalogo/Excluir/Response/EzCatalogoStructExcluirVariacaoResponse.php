<?php
/**
 * File for class EzCatalogoStructExcluirVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirVariacaoResponse originally named ExcluirVariacaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirVariacaoResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirVariacaoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirVariacaoResult;
    /**
     * Constructor method for ExcluirVariacaoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirVariacaoResult
     * @return EzCatalogoStructExcluirVariacaoResponse
     */
    public function __construct($_excluirVariacaoResult = NULL)
    {
        parent::__construct(array('ExcluirVariacaoResult'=>$_excluirVariacaoResult),false);
    }
    /**
     * Get ExcluirVariacaoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirVariacaoResult()
    {
        return $this->ExcluirVariacaoResult;
    }
    /**
     * Set ExcluirVariacaoResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirVariacaoResult the ExcluirVariacaoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirVariacaoResult($_excluirVariacaoResult)
    {
        return ($this->ExcluirVariacaoResult = $_excluirVariacaoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirVariacaoResponse
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
