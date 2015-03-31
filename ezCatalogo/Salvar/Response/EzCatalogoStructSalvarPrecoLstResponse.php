<?php
/**
 * File for class EzCatalogoStructSalvarPrecoLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarPrecoLstResponse originally named SalvarPrecoLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarPrecoLstResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarPrecoLstResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarPrecoLstResult;
    /**
     * Constructor method for SalvarPrecoLstResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarPrecoLstResult
     * @return EzCatalogoStructSalvarPrecoLstResponse
     */
    public function __construct($_salvarPrecoLstResult = NULL)
    {
        parent::__construct(array('SalvarPrecoLstResult'=>$_salvarPrecoLstResult),false);
    }
    /**
     * Get SalvarPrecoLstResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarPrecoLstResult()
    {
        return $this->SalvarPrecoLstResult;
    }
    /**
     * Set SalvarPrecoLstResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarPrecoLstResult the SalvarPrecoLstResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarPrecoLstResult($_salvarPrecoLstResult)
    {
        return ($this->SalvarPrecoLstResult = $_salvarPrecoLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarPrecoLstResponse
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
