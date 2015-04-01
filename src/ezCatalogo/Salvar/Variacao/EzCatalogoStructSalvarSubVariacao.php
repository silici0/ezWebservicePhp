<?php
/**
 * File for class EzCatalogoStructSalvarSubVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarSubVariacao originally named SalvarSubVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarSubVariacao extends EzCatalogoWsdlClass
{
    /**
     * The SubVariacao
     * @var EzCatalogoStructSubvariacao
     */
    public $SubVariacao;
    /**
     * Constructor method for SalvarSubVariacao
     * @see parent::__construct()
     * @param EzCatalogoStructSubvariacao $_subVariacao
     * @return EzCatalogoStructSalvarSubVariacao
     */
    public function __construct($_subVariacao = NULL)
    {
        parent::__construct(array('SubVariacao'=>$_subVariacao),false);
    }
    /**
     * Get SubVariacao value
     * @return EzCatalogoStructSubvariacao|null
     */
    public function getSubVariacao()
    {
        return $this->SubVariacao;
    }
    /**
     * Set SubVariacao value
     * @param EzCatalogoStructSubvariacao $_subVariacao the SubVariacao
     * @return EzCatalogoStructSubvariacao
     */
    public function setSubVariacao($_subVariacao)
    {
        return ($this->SubVariacao = $_subVariacao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarSubVariacao
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
