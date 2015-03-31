<?php
/**
 * File for class EzCatalogoStructSalvarMarcaLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarMarcaLstResponse originally named SalvarMarcaLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarMarcaLstResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarMarcaLstResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarMarcaLstResult;
    /**
     * Constructor method for SalvarMarcaLstResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarMarcaLstResult
     * @return EzCatalogoStructSalvarMarcaLstResponse
     */
    public function __construct($_salvarMarcaLstResult = NULL)
    {
        parent::__construct(array('SalvarMarcaLstResult'=>$_salvarMarcaLstResult),false);
    }
    /**
     * Get SalvarMarcaLstResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarMarcaLstResult()
    {
        return $this->SalvarMarcaLstResult;
    }
    /**
     * Set SalvarMarcaLstResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarMarcaLstResult the SalvarMarcaLstResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarMarcaLstResult($_salvarMarcaLstResult)
    {
        return ($this->SalvarMarcaLstResult = $_salvarMarcaLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarMarcaLstResponse
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
