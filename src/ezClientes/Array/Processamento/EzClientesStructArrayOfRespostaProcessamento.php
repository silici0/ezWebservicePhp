<?php
/**
 * File for class EzClientesStructArrayOfRespostaProcessamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfRespostaProcessamento originally named ArrayOfRespostaProcessamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfRespostaProcessamento extends EzClientesWsdlClass
{
    /**
     * The RespostaProcessamento
     * @var EzClientesStructRespostaProcessamento
     */
    public $RespostaProcessamento;
    /**
     * Constructor method for ArrayOfRespostaProcessamento
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_respostaProcessamento
     * @return EzClientesStructArrayOfRespostaProcessamento
     */
    public function __construct($_respostaProcessamento = NULL)
    {
        parent::__construct(array('RespostaProcessamento'=>$_respostaProcessamento),false);
    }
    /**
     * Get RespostaProcessamento value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getRespostaProcessamento()
    {
        return $this->RespostaProcessamento;
    }
    /**
     * Set RespostaProcessamento value
     * @param EzClientesStructRespostaProcessamento $_respostaProcessamento the RespostaProcessamento
     * @return EzClientesStructRespostaProcessamento
     */
    public function setRespostaProcessamento($_respostaProcessamento)
    {
        return ($this->RespostaProcessamento = $_respostaProcessamento);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructRespostaProcessamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructRespostaProcessamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructRespostaProcessamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructRespostaProcessamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructRespostaProcessamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string RespostaProcessamento
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfRespostaProcessamento
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
