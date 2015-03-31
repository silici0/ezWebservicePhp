<?php
/**
 * File for class EzClientesStructMenuRelation
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructMenuRelation originally named MenuRelation
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructMenuRelation extends EzClientesWsdlClass
{
    /**
     * The CategoriaID
     * @var int
     */
    public $CategoriaID;
    /**
     * The MenuID
     * @var int
     */
    public $MenuID;
    /**
     * The OrdemSecao
     * @var int
     */
    public $OrdemSecao;
    /**
     * Constructor method for MenuRelation
     * @see parent::__construct()
     * @param int $_categoriaID
     * @param int $_menuID
     * @param int $_ordemSecao
     * @return EzClientesStructMenuRelation
     */
    public function __construct($_categoriaID = NULL,$_menuID = NULL,$_ordemSecao = NULL)
    {
        parent::__construct(array('CategoriaID'=>$_categoriaID,'MenuID'=>$_menuID,'OrdemSecao'=>$_ordemSecao),false);
    }
    /**
     * Get CategoriaID value
     * @return int|null
     */
    public function getCategoriaID()
    {
        return $this->CategoriaID;
    }
    /**
     * Set CategoriaID value
     * @param int $_categoriaID the CategoriaID
     * @return int
     */
    public function setCategoriaID($_categoriaID)
    {
        return ($this->CategoriaID = $_categoriaID);
    }
    /**
     * Get MenuID value
     * @return int|null
     */
    public function getMenuID()
    {
        return $this->MenuID;
    }
    /**
     * Set MenuID value
     * @param int $_menuID the MenuID
     * @return int
     */
    public function setMenuID($_menuID)
    {
        return ($this->MenuID = $_menuID);
    }
    /**
     * Get OrdemSecao value
     * @return int|null
     */
    public function getOrdemSecao()
    {
        return $this->OrdemSecao;
    }
    /**
     * Set OrdemSecao value
     * @param int $_ordemSecao the OrdemSecao
     * @return int
     */
    public function setOrdemSecao($_ordemSecao)
    {
        return ($this->OrdemSecao = $_ordemSecao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructMenuRelation
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
