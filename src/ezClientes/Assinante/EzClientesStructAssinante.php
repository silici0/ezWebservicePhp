<?php
/**
 * File for class EzClientesStructAssinante
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructAssinante originally named Assinante
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructAssinante extends EzClientesWsdlClass
{
    /**
     * The DataCadastro
     * @var dateTime
     */
    public $DataCadastro;
    /**
     * The Email
     * @var string
     */
    public $Email;
    /**
     * The EmailID
     * @var int
     */
    public $EmailID;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The Protocolo
     * @var string
     */
    public $Protocolo;
    /**
     * Constructor method for Assinante
     * @see parent::__construct()
     * @param dateTime $_dataCadastro
     * @param string $_email
     * @param int $_emailID
     * @param string $_nome
     * @param string $_protocolo
     * @return EzClientesStructAssinante
     */
    public function __construct($_dataCadastro = NULL,$_email = NULL,$_emailID = NULL,$_nome = NULL,$_protocolo = NULL)
    {
        parent::__construct(array('DataCadastro'=>$_dataCadastro,'Email'=>$_email,'EmailID'=>$_emailID,'Nome'=>$_nome,'Protocolo'=>$_protocolo),false);
    }
    /**
     * Get DataCadastro value
     * @return dateTime|null
     */
    public function getDataCadastro()
    {
        return $this->DataCadastro;
    }
    /**
     * Set DataCadastro value
     * @param dateTime $_dataCadastro the DataCadastro
     * @return dateTime
     */
    public function setDataCadastro($_dataCadastro)
    {
        return ($this->DataCadastro = $_dataCadastro);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $_email the Email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->Email = $_email);
    }
    /**
     * Get EmailID value
     * @return int|null
     */
    public function getEmailID()
    {
        return $this->EmailID;
    }
    /**
     * Set EmailID value
     * @param int $_emailID the EmailID
     * @return int
     */
    public function setEmailID($_emailID)
    {
        return ($this->EmailID = $_emailID);
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
     * Get Protocolo value
     * @return string|null
     */
    public function getProtocolo()
    {
        return $this->Protocolo;
    }
    /**
     * Set Protocolo value
     * @param string $_protocolo the Protocolo
     * @return string
     */
    public function setProtocolo($_protocolo)
    {
        return ($this->Protocolo = $_protocolo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructAssinante
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
