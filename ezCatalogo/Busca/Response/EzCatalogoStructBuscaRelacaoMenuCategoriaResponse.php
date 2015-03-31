<?php
/**
 * File for class EzCatalogoStructBuscaRelacaoMenuCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructBuscaRelacaoMenuCategoriaResponse originally named BuscaRelacaoMenuCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructBuscaRelacaoMenuCategoriaResponse extends EzCatalogoWsdlClass
{
    /**
     * The BuscaRelacaoMenuCategoriaResult
     * @var EzCatalogoStructMenuRelation
     */
    public $BuscaRelacaoMenuCategoriaResult;
    /**
     * Constructor method for BuscaRelacaoMenuCategoriaResponse
     * @see parent::__construct()
     * @param EzCatalogoStructMenuRelation $_buscaRelacaoMenuCategoriaResult
     * @return EzCatalogoStructBuscaRelacaoMenuCategoriaResponse
     */
    public function __construct($_buscaRelacaoMenuCategoriaResult = NULL)
    {
        parent::__construct(array('BuscaRelacaoMenuCategoriaResult'=>$_buscaRelacaoMenuCategoriaResult),false);
    }
    /**
     * Get BuscaRelacaoMenuCategoriaResult value
     * @return EzCatalogoStructMenuRelation|null
     */
    public function getBuscaRelacaoMenuCategoriaResult()
    {
        return $this->BuscaRelacaoMenuCategoriaResult;
    }
    /**
     * Set BuscaRelacaoMenuCategoriaResult value
     * @param EzCatalogoStructMenuRelation $_buscaRelacaoMenuCategoriaResult the BuscaRelacaoMenuCategoriaResult
     * @return EzCatalogoStructMenuRelation
     */
    public function setBuscaRelacaoMenuCategoriaResult($_buscaRelacaoMenuCategoriaResult)
    {
        return ($this->BuscaRelacaoMenuCategoriaResult = $_buscaRelacaoMenuCategoriaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructBuscaRelacaoMenuCategoriaResponse
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
