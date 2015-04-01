<?php
/**
 * File for class EzCatalogoStructSalvarVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarVariacao originally named SalvarVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarVariacao extends EzCatalogoWsdlClass
{
    /**
     * The Variacao
     * @var EzCatalogoStructVariacao
     */
    public $Variacao;
    /**
     * Constructor method for SalvarVariacao
     * @see parent::__construct()
     * @param EzCatalogoStructVariacao $_variacao
     * @return EzCatalogoStructSalvarVariacao
     */
    public function __construct($_variacao = NULL)
    {
        parent::__construct(array('Variacao'=>$_variacao),false);
    }
    /**
     * Get Variacao value
     * @return EzCatalogoStructVariacao|null
     */
    public function getVariacao()
    {
        return $this->Variacao;
    }
    /**
     * Set Variacao value
     * @param EzCatalogoStructVariacao $_variacao the Variacao
     * @return EzCatalogoStructVariacao
     */
    public function setVariacao($_variacao)
    {
        return ($this->Variacao = $_variacao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarVariacao
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
