<?php
/**
 * File for class EzCatalogoStructArrayOfRespostaProcessamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfRespostaProcessamento originally named ArrayOfRespostaProcessamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfRespostaProcessamento extends EzCatalogoWsdlClass
{
    /**
     * The RespostaProcessamento
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $RespostaProcessamento;
    /**
     * Constructor method for ArrayOfRespostaProcessamento
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_respostaProcessamento
     * @return EzCatalogoStructArrayOfRespostaProcessamento
     */
    public function __construct($_respostaProcessamento = NULL)
    {
        parent::__construct(array('RespostaProcessamento'=>$_respostaProcessamento),false);
    }
    /**
     * Get RespostaProcessamento value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getRespostaProcessamento()
    {
        return $this->RespostaProcessamento;
    }
    /**
     * Set RespostaProcessamento value
     * @param EzCatalogoStructRespostaProcessamento $_respostaProcessamento the RespostaProcessamento
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setRespostaProcessamento($_respostaProcessamento)
    {
        return ($this->RespostaProcessamento = $_respostaProcessamento);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string RespostaProcessamento
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfRespostaProcessamento
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
