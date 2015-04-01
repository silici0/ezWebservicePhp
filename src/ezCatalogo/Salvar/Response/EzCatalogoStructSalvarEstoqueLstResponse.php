<?php
/**
 * File for class EzCatalogoStructSalvarEstoqueLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarEstoqueLstResponse originally named SalvarEstoqueLstResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarEstoqueLstResponse extends EzCatalogoWsdlClass
{
    /**
     * The SalvarEstoqueLstResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SalvarEstoqueLstResult;
    /**
     * Constructor method for SalvarEstoqueLstResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_salvarEstoqueLstResult
     * @return EzCatalogoStructSalvarEstoqueLstResponse
     */
    public function __construct($_salvarEstoqueLstResult = NULL)
    {
        parent::__construct(array('SalvarEstoqueLstResult'=>$_salvarEstoqueLstResult),false);
    }
    /**
     * Get SalvarEstoqueLstResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSalvarEstoqueLstResult()
    {
        return $this->SalvarEstoqueLstResult;
    }
    /**
     * Set SalvarEstoqueLstResult value
     * @param EzCatalogoStructRespostaProcessamento $_salvarEstoqueLstResult the SalvarEstoqueLstResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSalvarEstoqueLstResult($_salvarEstoqueLstResult)
    {
        return ($this->SalvarEstoqueLstResult = $_salvarEstoqueLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarEstoqueLstResponse
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
