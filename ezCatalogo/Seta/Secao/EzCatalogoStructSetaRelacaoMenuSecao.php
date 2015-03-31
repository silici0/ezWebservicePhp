<?php
/**
 * File for class EzCatalogoStructSetaRelacaoMenuSecao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSetaRelacaoMenuSecao originally named SetaRelacaoMenuSecao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSetaRelacaoMenuSecao extends EzCatalogoWsdlClass
{
    /**
     * The relation
     * @var EzCatalogoStructMenuRelation
     */
    public $relation;
    /**
     * Constructor method for SetaRelacaoMenuSecao
     * @see parent::__construct()
     * @param EzCatalogoStructMenuRelation $_relation
     * @return EzCatalogoStructSetaRelacaoMenuSecao
     */
    public function __construct($_relation = NULL)
    {
        parent::__construct(array('relation'=>$_relation),false);
    }
    /**
     * Get relation value
     * @return EzCatalogoStructMenuRelation|null
     */
    public function getRelation()
    {
        return $this->relation;
    }
    /**
     * Set relation value
     * @param EzCatalogoStructMenuRelation $_relation the relation
     * @return EzCatalogoStructMenuRelation
     */
    public function setRelation($_relation)
    {
        return ($this->relation = $_relation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSetaRelacaoMenuSecao
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
