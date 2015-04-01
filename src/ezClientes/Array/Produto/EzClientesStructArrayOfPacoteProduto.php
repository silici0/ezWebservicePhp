<?php
/**
 * File for class EzClientesStructArrayOfPacoteProduto
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfPacoteProduto originally named ArrayOfPacoteProduto
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfPacoteProduto extends EzClientesWsdlClass
{
    /**
     * The PacoteProduto
     * @var EzClientesStructPacoteProduto
     */
    public $PacoteProduto;
    /**
     * Constructor method for ArrayOfPacoteProduto
     * @see parent::__construct()
     * @param EzClientesStructPacoteProduto $_pacoteProduto
     * @return EzClientesStructArrayOfPacoteProduto
     */
    public function __construct($_pacoteProduto = NULL)
    {
        parent::__construct(array('PacoteProduto'=>$_pacoteProduto),false);
    }
    /**
     * Get PacoteProduto value
     * @return EzClientesStructPacoteProduto|null
     */
    public function getPacoteProduto()
    {
        return $this->PacoteProduto;
    }
    /**
     * Set PacoteProduto value
     * @param EzClientesStructPacoteProduto $_pacoteProduto the PacoteProduto
     * @return EzClientesStructPacoteProduto
     */
    public function setPacoteProduto($_pacoteProduto)
    {
        return ($this->PacoteProduto = $_pacoteProduto);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructPacoteProduto
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructPacoteProduto
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructPacoteProduto
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructPacoteProduto
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructPacoteProduto
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string PacoteProduto
     */
    public function getAttributeName()
    {
        return 'PacoteProduto';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfPacoteProduto
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
