<?php
/**
 * File for class EzCatalogoStructBuscaMenusPersonalizadosResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructBuscaMenusPersonalizadosResponse originally named BuscaMenusPersonalizadosResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructBuscaMenusPersonalizadosResponse extends EzCatalogoWsdlClass
{
    /**
     * The BuscaMenusPersonalizadosResult
     * @var EzCatalogoStructArrayOfMenu
     */
    public $BuscaMenusPersonalizadosResult;
    /**
     * Constructor method for BuscaMenusPersonalizadosResponse
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfMenu $_buscaMenusPersonalizadosResult
     * @return EzCatalogoStructBuscaMenusPersonalizadosResponse
     */
    public function __construct($_buscaMenusPersonalizadosResult = NULL)
    {
        parent::__construct(array('BuscaMenusPersonalizadosResult'=>($_buscaMenusPersonalizadosResult instanceof EzCatalogoStructArrayOfMenu)?$_buscaMenusPersonalizadosResult:new EzCatalogoStructArrayOfMenu($_buscaMenusPersonalizadosResult)),false);
    }
    /**
     * Get BuscaMenusPersonalizadosResult value
     * @return EzCatalogoStructArrayOfMenu|null
     */
    public function getBuscaMenusPersonalizadosResult()
    {
        return $this->BuscaMenusPersonalizadosResult;
    }
    /**
     * Set BuscaMenusPersonalizadosResult value
     * @param EzCatalogoStructArrayOfMenu $_buscaMenusPersonalizadosResult the BuscaMenusPersonalizadosResult
     * @return EzCatalogoStructArrayOfMenu
     */
    public function setBuscaMenusPersonalizadosResult($_buscaMenusPersonalizadosResult)
    {
        return ($this->BuscaMenusPersonalizadosResult = $_buscaMenusPersonalizadosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructBuscaMenusPersonalizadosResponse
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
