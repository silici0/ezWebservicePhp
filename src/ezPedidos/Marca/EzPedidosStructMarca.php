<?php
/**
 * File for class EzPedidosStructMarca
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructMarca originally named Marca
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructMarca extends EzPedidosWsdlClass
{
    /**
     * The Ativo
     * @var boolean
     */
    public $Ativo;
    /**
     * The Logotipo
     * @var string
     */
    public $Logotipo;
    /**
     * The MarcaID
     * @var int
     */
    public $MarcaID;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The Ordem
     * @var int
     */
    public $Ordem;
    /**
     * The Url
     * @var string
     */
    public $Url;
    /**
     * Constructor method for Marca
     * @see parent::__construct()
     * @param boolean $_ativo
     * @param string $_logotipo
     * @param int $_marcaID
     * @param string $_nome
     * @param int $_ordem
     * @param string $_url
     * @return EzPedidosStructMarca
     */
    public function __construct($_ativo = NULL,$_logotipo = NULL,$_marcaID = NULL,$_nome = NULL,$_ordem = NULL,$_url = NULL)
    {
        parent::__construct(array('Ativo'=>$_ativo,'Logotipo'=>$_logotipo,'MarcaID'=>$_marcaID,'Nome'=>$_nome,'Ordem'=>$_ordem,'Url'=>$_url),false);
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
     * Get Logotipo value
     * @return string|null
     */
    public function getLogotipo()
    {
        return $this->Logotipo;
    }
    /**
     * Set Logotipo value
     * @param string $_logotipo the Logotipo
     * @return string
     */
    public function setLogotipo($_logotipo)
    {
        return ($this->Logotipo = $_logotipo);
    }
    /**
     * Get MarcaID value
     * @return int|null
     */
    public function getMarcaID()
    {
        return $this->MarcaID;
    }
    /**
     * Set MarcaID value
     * @param int $_marcaID the MarcaID
     * @return int
     */
    public function setMarcaID($_marcaID)
    {
        return ($this->MarcaID = $_marcaID);
    }
    /**
     * Get Nome value
     * @return string|null
     */
    public function getNome()
    {
        return $this->Nome;
    }
    /**
     * Set Nome value
     * @param string $_nome the Nome
     * @return string
     */
    public function setNome($_nome)
    {
        return ($this->Nome = $_nome);
    }
    /**
     * Get Ordem value
     * @return int|null
     */
    public function getOrdem()
    {
        return $this->Ordem;
    }
    /**
     * Set Ordem value
     * @param int $_ordem the Ordem
     * @return int
     */
    public function setOrdem($_ordem)
    {
        return ($this->Ordem = $_ordem);
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $_url the Url
     * @return string
     */
    public function setUrl($_url)
    {
        return ($this->Url = $_url);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructMarca
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
