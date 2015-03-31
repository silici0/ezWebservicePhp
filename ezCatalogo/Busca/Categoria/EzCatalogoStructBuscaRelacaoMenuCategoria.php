<?php
/**
 * File for class EzCatalogoStructBuscaRelacaoMenuCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructBuscaRelacaoMenuCategoria originally named BuscaRelacaoMenuCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructBuscaRelacaoMenuCategoria extends EzCatalogoWsdlClass
{
    /**
     * The menuID
     * @var int
     */
    public $menuID;
    /**
     * The categoriaID
     * @var int
     */
    public $categoriaID;
    /**
     * Constructor method for BuscaRelacaoMenuCategoria
     * @see parent::__construct()
     * @param int $_menuID
     * @param int $_categoriaID
     * @return EzCatalogoStructBuscaRelacaoMenuCategoria
     */
    public function __construct($_menuID = NULL,$_categoriaID = NULL)
    {
        parent::__construct(array('menuID'=>$_menuID,'categoriaID'=>$_categoriaID),false);
    }
    /**
     * Get menuID value
     * @return int|null
     */
    public function getMenuID()
    {
        return $this->menuID;
    }
    /**
     * Set menuID value
     * @param int $_menuID the menuID
     * @return int
     */
    public function setMenuID($_menuID)
    {
        return ($this->menuID = $_menuID);
    }
    /**
     * Get categoriaID value
     * @return int|null
     */
    public function getCategoriaID()
    {
        return $this->categoriaID;
    }
    /**
     * Set categoriaID value
     * @param int $_categoriaID the categoriaID
     * @return int
     */
    public function setCategoriaID($_categoriaID)
    {
        return ($this->categoriaID = $_categoriaID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructBuscaRelacaoMenuCategoria
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
