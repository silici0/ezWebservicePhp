<?php
/**
 * File for class EzCatalogoStructArrayOfRespostaProcessamentoErro
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfRespostaProcessamentoErro originally named ArrayOfRespostaProcessamentoErro
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfRespostaProcessamentoErro extends EzCatalogoWsdlClass
{
    /**
     * The RespostaProcessamentoErro
     * @var EzCatalogoStructRespostaProcessamentoErro
     */
    public $RespostaProcessamentoErro;
    /**
     * Constructor method for ArrayOfRespostaProcessamentoErro
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamentoErro $_respostaProcessamentoErro
     * @return EzCatalogoStructArrayOfRespostaProcessamentoErro
     */
    public function __construct($_respostaProcessamentoErro = NULL)
    {
        parent::__construct(array('RespostaProcessamentoErro'=>$_respostaProcessamentoErro),false);
    }
    /**
     * Get RespostaProcessamentoErro value
     * @return EzCatalogoStructRespostaProcessamentoErro|null
     */
    public function getRespostaProcessamentoErro()
    {
        return $this->RespostaProcessamentoErro;
    }
    /**
     * Set RespostaProcessamentoErro value
     * @param EzCatalogoStructRespostaProcessamentoErro $_respostaProcessamentoErro the RespostaProcessamentoErro
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function setRespostaProcessamentoErro($_respostaProcessamentoErro)
    {
        return ($this->RespostaProcessamentoErro = $_respostaProcessamentoErro);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructRespostaProcessamentoErro
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string RespostaProcessamentoErro
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamentoErro';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfRespostaProcessamentoErro
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
