<?php
/**
 * File for class EzClientesStructArrayOfRespostaProcessamentoErro
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfRespostaProcessamentoErro originally named ArrayOfRespostaProcessamentoErro
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfRespostaProcessamentoErro extends EzClientesWsdlClass
{
    /**
     * The RespostaProcessamentoErro
     * @var EzClientesStructRespostaProcessamentoErro
     */
    public $RespostaProcessamentoErro;
    /**
     * Constructor method for ArrayOfRespostaProcessamentoErro
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamentoErro $_respostaProcessamentoErro
     * @return EzClientesStructArrayOfRespostaProcessamentoErro
     */
    public function __construct($_respostaProcessamentoErro = NULL)
    {
        parent::__construct(array('RespostaProcessamentoErro'=>$_respostaProcessamentoErro),false);
    }
    /**
     * Get RespostaProcessamentoErro value
     * @return EzClientesStructRespostaProcessamentoErro|null
     */
    public function getRespostaProcessamentoErro()
    {
        return $this->RespostaProcessamentoErro;
    }
    /**
     * Set RespostaProcessamentoErro value
     * @param EzClientesStructRespostaProcessamentoErro $_respostaProcessamentoErro the RespostaProcessamentoErro
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function setRespostaProcessamentoErro($_respostaProcessamentoErro)
    {
        return ($this->RespostaProcessamentoErro = $_respostaProcessamentoErro);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string RespostaProcessamentoErro
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamentoErro';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfRespostaProcessamentoErro
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
