<?php
/**
 * File for class EzPedidosStructMenu
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructMenu originally named Menu
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructMenu extends EzPedidosWsdlClass
{
    /**
     * The Ativo
     * @var boolean
     */
    public $Ativo;
    /**
     * The MenuAlias
     * @var string
     */
    public $MenuAlias;
    /**
     * The MenuID
     * @var int
     */
    public $MenuID;
    /**
     * The MenuTitulo
     * @var string
     */
    public $MenuTitulo;
    /**
     * The Vinculavel
     * @var boolean
     */
    public $Vinculavel;
    /**
     * Constructor method for Menu
     * @see parent::__construct()
     * @param boolean $_ativo
     * @param string $_menuAlias
     * @param int $_menuID
     * @param string $_menuTitulo
     * @param boolean $_vinculavel
     * @return EzPedidosStructMenu
     */
    public function __construct($_ativo = NULL,$_menuAlias = NULL,$_menuID = NULL,$_menuTitulo = NULL,$_vinculavel = NULL)
    {
        parent::__construct(array('Ativo'=>$_ativo,'MenuAlias'=>$_menuAlias,'MenuID'=>$_menuID,'MenuTitulo'=>$_menuTitulo,'Vinculavel'=>$_vinculavel),false);
    }
    /**
     * Get Ativo value
     * @return boolean|null
     */
    public function getAtivo()
    {
        return $this->Ativo;
    }
    /**
     * Set Ativo value
     * @param boolean $_ativo the Ativo
     * @return boolean
     */
    public function setAtivo($_ativo)
    {
        return ($this->Ativo = $_ativo);
    }
    /**
     * Get MenuAlias value
     * @return string|null
     */
    public function getMenuAlias()
    {
        return $this->MenuAlias;
    }
    /**
     * Set MenuAlias value
     * @param string $_menuAlias the MenuAlias
     * @return string
     */
    public function setMenuAlias($_menuAlias)
    {
        return ($this->MenuAlias = $_menuAlias);
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
     * Get MenuTitulo value
     * @return string|null
     */
    public function getMenuTitulo()
    {
        return $this->MenuTitulo;
    }
    /**
     * Set MenuTitulo value
     * @param string $_menuTitulo the MenuTitulo
     * @return string
     */
    public function setMenuTitulo($_menuTitulo)
    {
        return ($this->MenuTitulo = $_menuTitulo);
    }
    /**
     * Get Vinculavel value
     * @return boolean|null
     */
    public function getVinculavel()
    {
        return $this->Vinculavel;
    }
    /**
     * Set Vinculavel value
     * @param boolean $_vinculavel the Vinculavel
     * @return boolean
     */
    public function setVinculavel($_vinculavel)
    {
        return ($this->Vinculavel = $_vinculavel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructMenu
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
