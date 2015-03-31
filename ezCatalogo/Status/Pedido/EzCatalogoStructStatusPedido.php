<?php
/**
 * File for class EzCatalogoStructStatusPedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructStatusPedido originally named StatusPedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructStatusPedido extends EzCatalogoWsdlClass
{
    /**
     * The NotificarCliente
     * @var boolean
     */
    public $NotificarCliente;
    /**
     * The NumeroObjeto
     * @var string
     */
    public $NumeroObjeto;
    /**
     * The PedidoID
     * @var int
     */
    public $PedidoID;
    /**
     * The StatusID
     * @var int
     */
    public $StatusID;
    /**
     * The TemplateEmailID
     * @var string
     */
    public $TemplateEmailID;
    /**
     * Constructor method for StatusPedido
     * @see parent::__construct()
     * @param boolean $_notificarCliente
     * @param string $_numeroObjeto
     * @param int $_pedidoID
     * @param int $_statusID
     * @param string $_templateEmailID
     * @return EzCatalogoStructStatusPedido
     */
    public function __construct($_notificarCliente = NULL,$_numeroObjeto = NULL,$_pedidoID = NULL,$_statusID = NULL,$_templateEmailID = NULL)
    {
        parent::__construct(array('NotificarCliente'=>$_notificarCliente,'NumeroObjeto'=>$_numeroObjeto,'PedidoID'=>$_pedidoID,'StatusID'=>$_statusID,'TemplateEmailID'=>$_templateEmailID),false);
    }
    /**
     * Get NotificarCliente value
     * @return boolean|null
     */
    public function getNotificarCliente()
    {
        return $this->NotificarCliente;
    }
    /**
     * Set NotificarCliente value
     * @param boolean $_notificarCliente the NotificarCliente
     * @return boolean
     */
    public function setNotificarCliente($_notificarCliente)
    {
        return ($this->NotificarCliente = $_notificarCliente);
    }
    /**
     * Get NumeroObjeto value
     * @return string|null
     */
    public function getNumeroObjeto()
    {
        return $this->NumeroObjeto;
    }
    /**
     * Set NumeroObjeto value
     * @param string $_numeroObjeto the NumeroObjeto
     * @return string
     */
    public function setNumeroObjeto($_numeroObjeto)
    {
        return ($this->NumeroObjeto = $_numeroObjeto);
    }
    /**
     * Get PedidoID value
     * @return int|null
     */
    public function getPedidoID()
    {
        return $this->PedidoID;
    }
    /**
     * Set PedidoID value
     * @param int $_pedidoID the PedidoID
     * @return int
     */
    public function setPedidoID($_pedidoID)
    {
        return ($this->PedidoID = $_pedidoID);
    }
    /**
     * Get StatusID value
     * @return int|null
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }
    /**
     * Set StatusID value
     * @param int $_statusID the StatusID
     * @return int
     */
    public function setStatusID($_statusID)
    {
        return ($this->StatusID = $_statusID);
    }
    /**
     * Get TemplateEmailID value
     * @return string|null
     */
    public function getTemplateEmailID()
    {
        return $this->TemplateEmailID;
    }
    /**
     * Set TemplateEmailID value
     * @param string $_templateEmailID the TemplateEmailID
     * @return string
     */
    public function setTemplateEmailID($_templateEmailID)
    {
        return ($this->TemplateEmailID = $_templateEmailID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructStatusPedido
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
