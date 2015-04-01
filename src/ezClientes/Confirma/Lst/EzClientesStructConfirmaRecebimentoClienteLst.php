<?php
/**
 * File for class EzClientesStructConfirmaRecebimentoClienteLst
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructConfirmaRecebimentoClienteLst originally named ConfirmaRecebimentoClienteLst
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructConfirmaRecebimentoClienteLst extends EzClientesWsdlClass
{
    /**
     * The arrProtocolo
     * @var EzClientesStructArrayOfstring
     */
    public $arrProtocolo;
    /**
     * Constructor method for ConfirmaRecebimentoClienteLst
     * @see parent::__construct()
     * @param EzClientesStructArrayOfstring $_arrProtocolo
     * @return EzClientesStructConfirmaRecebimentoClienteLst
     */
    public function __construct($_arrProtocolo = NULL)
    {
        parent::__construct(array('arrProtocolo'=>($_arrProtocolo instanceof EzClientesStructArrayOfstring)?$_arrProtocolo:new EzClientesStructArrayOfstring($_arrProtocolo)),false);
    }
    /**
     * Get arrProtocolo value
     * @return EzClientesStructArrayOfstring|null
     */
    public function getArrProtocolo()
    {
        return $this->arrProtocolo;
    }
    /**
     * Set arrProtocolo value
     * @param EzClientesStructArrayOfstring $_arrProtocolo the arrProtocolo
     * @return EzClientesStructArrayOfstring
     */
    public function setArrProtocolo($_arrProtocolo)
    {
        return ($this->arrProtocolo = $_arrProtocolo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructConfirmaRecebimentoClienteLst
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
