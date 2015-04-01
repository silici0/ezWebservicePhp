<?php
/**
 * File for class EzCatalogoStructArrayOfPacoteProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfPacoteProduto originally named ArrayOfPacoteProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfPacoteProduto extends EzCatalogoWsdlClass
{
    /**
     * The PacoteProduto
     * @var EzCatalogoStructPacoteProduto
     */
    public $PacoteProduto;
    /**
     * Constructor method for ArrayOfPacoteProduto
     * @see parent::__construct()
     * @param EzCatalogoStructPacoteProduto $_pacoteProduto
     * @return EzCatalogoStructArrayOfPacoteProduto
     */
    public function __construct($_pacoteProduto = NULL)
    {
        parent::__construct(array('PacoteProduto'=>$_pacoteProduto),false);
    }
    /**
     * Get PacoteProduto value
     * @return EzCatalogoStructPacoteProduto|null
     */
    public function getPacoteProduto()
    {
        return $this->PacoteProduto;
    }
    /**
     * Set PacoteProduto value
     * @param EzCatalogoStructPacoteProduto $_pacoteProduto the PacoteProduto
     * @return EzCatalogoStructPacoteProduto
     */
    public function setPacoteProduto($_pacoteProduto)
    {
        return ($this->PacoteProduto = $_pacoteProduto);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructPacoteProduto
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructPacoteProduto
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructPacoteProduto
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructPacoteProduto
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructPacoteProduto
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string PacoteProduto
     */
    public function getAttributeName()
    {
        return 'PacoteProduto';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfPacoteProduto
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
