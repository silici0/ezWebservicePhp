<?php
/**
 * File for class EzCatalogoStructExcluirMarcaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirMarcaResponse originally named ExcluirMarcaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirMarcaResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirMarcaResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirMarcaResult;
    /**
     * Constructor method for ExcluirMarcaResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirMarcaResult
     * @return EzCatalogoStructExcluirMarcaResponse
     */
    public function __construct($_excluirMarcaResult = NULL)
    {
        parent::__construct(array('ExcluirMarcaResult'=>$_excluirMarcaResult),false);
    }
    /**
     * Get ExcluirMarcaResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirMarcaResult()
    {
        return $this->ExcluirMarcaResult;
    }
    /**
     * Set ExcluirMarcaResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirMarcaResult the ExcluirMarcaResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirMarcaResult($_excluirMarcaResult)
    {
        return ($this->ExcluirMarcaResult = $_excluirMarcaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirMarcaResponse
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
