<?php
/**
 * File for class EzCatalogoStructSalvarEstoqueResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarEstoqueResponse originally named SalvarEstoqueResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarEstoqueResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarEstoqueResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarEstoqueResult;
    /**
     * Constructor method for SalvarEstoqueResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarEstoqueResult
     * @return EzCatalogoStructSalvarEstoqueResponse
     */
    public function __construct($_salvarEstoqueResult = NULL)
    {
        parent::__construct(array('SalvarEstoqueResult'=>$_salvarEstoqueResult),false);
    }
    /**
     * Get SalvarEstoqueResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarEstoqueResult()
    {
        return $this->SalvarEstoqueResult;
    }
    /**
     * Set SalvarEstoqueResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarEstoqueResult the SalvarEstoqueResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarEstoqueResult($_salvarEstoqueResult)
    {
        return ($this->SalvarEstoqueResult = $_salvarEstoqueResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarEstoqueResponse
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
