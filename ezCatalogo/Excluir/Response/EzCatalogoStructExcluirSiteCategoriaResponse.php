<?php
/**
 * File for class EzCatalogoStructExcluirSiteCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirSiteCategoriaResponse originally named ExcluirSiteCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirSiteCategoriaResponse extends EzCatalogoWsdlClass
{
    /**
     * The ExcluirSiteCategoriaResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $ExcluirSiteCategoriaResult;
    /**
     * Constructor method for ExcluirSiteCategoriaResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_excluirSiteCategoriaResult
     * @return EzCatalogoStructExcluirSiteCategoriaResponse
     */
    public function __construct($_excluirSiteCategoriaResult = NULL)
    {
        parent::__construct(array('ExcluirSiteCategoriaResult'=>$_excluirSiteCategoriaResult),false);
    }
    /**
     * Get ExcluirSiteCategoriaResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getExcluirSiteCategoriaResult()
    {
        return $this->ExcluirSiteCategoriaResult;
    }
    /**
     * Set ExcluirSiteCategoriaResult value
     * @param EzCatalogoStructRespostaProcessamento $_excluirSiteCategoriaResult the ExcluirSiteCategoriaResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setExcluirSiteCategoriaResult($_excluirSiteCategoriaResult)
    {
        return ($this->ExcluirSiteCategoriaResult = $_excluirSiteCategoriaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirSiteCategoriaResponse
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
