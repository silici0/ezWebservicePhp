<?php
/**
 * File for class EzCatalogoStructSalvarPrecoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarPrecoResponse originally named SalvarPrecoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarPrecoResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarPrecoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarPrecoResult;
    /**
     * Constructor method for SalvarPrecoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarPrecoResult
     * @return EzCatalogoStructSalvarPrecoResponse
     */
    public function __construct($_salvarPrecoResult = NULL)
    {
        parent::__construct(array('SalvarPrecoResult'=>$_salvarPrecoResult),false);
    }
    /**
     * Get SalvarPrecoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarPrecoResult()
    {
        return $this->SalvarPrecoResult;
    }
    /**
     * Set SalvarPrecoResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarPrecoResult the SalvarPrecoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarPrecoResult($_salvarPrecoResult)
    {
        return ($this->SalvarPrecoResult = $_salvarPrecoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarPrecoResponse
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
