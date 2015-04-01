<?php
/**
 * File for class EzCatalogoStructSalvarMarcaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarMarcaResponse originally named SalvarMarcaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarMarcaResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarMarcaResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarMarcaResult;
    /**
     * Constructor method for SalvarMarcaResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarMarcaResult
     * @return EzCatalogoStructSalvarMarcaResponse
     */
    public function __construct($_salvarMarcaResult = NULL)
    {
        parent::__construct(array('SalvarMarcaResult'=>$_salvarMarcaResult),false);
    }
    /**
     * Get SalvarMarcaResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarMarcaResult()
    {
        return $this->SalvarMarcaResult;
    }
    /**
     * Set SalvarMarcaResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarMarcaResult the SalvarMarcaResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarMarcaResult($_salvarMarcaResult)
    {
        return ($this->SalvarMarcaResult = $_salvarMarcaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarMarcaResponse
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
