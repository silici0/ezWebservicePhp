<?php
/**
 * File for class EzCatalogoStructSalvarSiteCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarSiteCategoriaResponse originally named SalvarSiteCategoriaResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarSiteCategoriaResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarSiteCategoriaResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarSiteCategoriaResult;
    /**
     * Constructor method for SalvarSiteCategoriaResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarSiteCategoriaResult
     * @return EzCatalogoStructSalvarSiteCategoriaResponse
     */
    public function __construct($_salvarSiteCategoriaResult = NULL)
    {
        parent::__construct(array('SalvarSiteCategoriaResult'=>$_salvarSiteCategoriaResult),false);
    }
    /**
     * Get SalvarSiteCategoriaResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarSiteCategoriaResult()
    {
        return $this->SalvarSiteCategoriaResult;
    }
    /**
     * Set SalvarSiteCategoriaResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarSiteCategoriaResult the SalvarSiteCategoriaResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarSiteCategoriaResult($_salvarSiteCategoriaResult)
    {
        return ($this->SalvarSiteCategoriaResult = $_salvarSiteCategoriaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarSiteCategoriaResponse
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
