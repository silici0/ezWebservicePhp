<?php
/**
 * File for class EzCatalogoStructFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructFornecedor originally named Fornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructFornecedor extends EzCatalogoWsdlClass
{
    /**
     * The Contato
     * @var string
     */
    public $Contato;
    /**
     * The Email
     * @var string
     */
    public $Email;
    /**
     * The FornecedorID
     * @var int
     */
    public $FornecedorID;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The Observacoes
     * @var string
     */
    public $Observacoes;
    /**
     * The Telefone
     * @var string
     */
    public $Telefone;
    /**
     * The Url
     * @var string
     */
    public $Url;
    /**
     * Constructor method for Fornecedor
     * @see parent::__construct()
     * @param string $_contato
     * @param string $_email
     * @param int $_fornecedorID
     * @param string $_nome
     * @param string $_observacoes
     * @param string $_telefone
     * @param string $_url
     * @return EzCatalogoStructFornecedor
     */
    public function __construct($_contato = NULL,$_email = NULL,$_fornecedorID = NULL,$_nome = NULL,$_observacoes = NULL,$_telefone = NULL,$_url = NULL)
    {
        parent::__construct(array('Contato'=>$_contato,'Email'=>$_email,'FornecedorID'=>$_fornecedorID,'Nome'=>$_nome,'Observacoes'=>$_observacoes,'Telefone'=>$_telefone,'Url'=>$_url),false);
    }
    /**
     * Get Contato value
     * @return string|null
     */
    public function getContato()
    {
        return $this->Contato;
    }
    /**
     * Set Contato value
     * @param string $_contato the Contato
     * @return string
     */
    public function setContato($_contato)
    {
        return ($this->Contato = $_contato);
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
     * Get FornecedorID value
     * @return int|null
     */
    public function getFornecedorID()
    {
        return $this->FornecedorID;
    }
    /**
     * Set FornecedorID value
     * @param int $_fornecedorID the FornecedorID
     * @return int
     */
    public function setFornecedorID($_fornecedorID)
    {
        return ($this->FornecedorID = $_fornecedorID);
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
     * Get Observacoes value
     * @return string|null
     */
    public function getObservacoes()
    {
        return $this->Observacoes;
    }
    /**
     * Set Observacoes value
     * @param string $_observacoes the Observacoes
     * @return string
     */
    public function setObservacoes($_observacoes)
    {
        return ($this->Observacoes = $_observacoes);
    }
    /**
     * Get Telefone value
     * @return string|null
     */
    public function getTelefone()
    {
        return $this->Telefone;
    }
    /**
     * Set Telefone value
     * @param string $_telefone the Telefone
     * @return string
     */
    public function setTelefone($_telefone)
    {
        return ($this->Telefone = $_telefone);
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
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructFornecedor
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
