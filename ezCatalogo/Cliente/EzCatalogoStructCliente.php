<?php
/**
 * File for class EzCatalogoStructCliente
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructCliente originally named Cliente
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructCliente extends EzCatalogoWsdlClass
{
    /**
     * The Apelido
     * @var string
     */
    public $Apelido;
    /**
     * The Bairro
     * @var string
     */
    public $Bairro;
    /**
     * The CEP
     * @var string
     */
    public $CEP;
    /**
     * The CNPJ
     * @var string
     */
    public $CNPJ;
    /**
     * The CPF
     * @var string
     */
    public $CPF;
    /**
     * The Celular
     * @var string
     */
    public $Celular;
    /**
     * The Cidade
     * @var string
     */
    public $Cidade;
    /**
     * The ClienteID
     * @var int
     */
    public $ClienteID;
    /**
     * The ComoDescobriu
     * @var string
     */
    public $ComoDescobriu;
    /**
     * The Complemento
     * @var string
     */
    public $Complemento;
    /**
     * The DataCadastro
     * @var dateTime
     */
    public $DataCadastro;
    /**
     * The DataNascimento
     * @var dateTime
     */
    public $DataNascimento;
    /**
     * The Email
     * @var string
     */
    public $Email;
    /**
     * The Estado
     * @var string
     */
    public $Estado;
    /**
     * The Fax
     * @var string
     */
    public $Fax;
    /**
     * The IE
     * @var string
     */
    public $IE;
    /**
     * The IP
     * @var string
     */
    public $IP;
    /**
     * The Logradouro
     * @var string
     */
    public $Logradouro;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The NomeFantasia
     * @var string
     */
    public $NomeFantasia;
    /**
     * The Numero
     * @var string
     */
    public $Numero;
    /**
     * The Observacoes
     * @var string
     */
    public $Observacoes;
    /**
     * The Pais
     * @var string
     */
    public $Pais;
    /**
     * The Protocolo
     * @var string
     */
    public $Protocolo;
    /**
     * The RG
     * @var string
     */
    public $RG;
    /**
     * The RazaoSocial
     * @var string
     */
    public $RazaoSocial;
    /**
     * The ReceberEmail
     * @var boolean
     */
    public $ReceberEmail;
    /**
     * The Sexo
     * @var ClienteSexoEnum
     */
    public $Sexo;
    /**
     * The Telefone
     * @var string
     */
    public $Telefone;
    /**
     * The Telefone2
     * @var string
     */
    public $Telefone2;
    /**
     * The TipoCliente
     * @var TipoClienteEnum
     */
    public $TipoCliente;
    /**
     * The Token
     * @var string
     */
    public $Token;
    /**
     * Constructor method for Cliente
     * @see parent::__construct()
     * @param string $_apelido
     * @param string $_bairro
     * @param string $_cEP
     * @param string $_cNPJ
     * @param string $_cPF
     * @param string $_celular
     * @param string $_cidade
     * @param int $_clienteID
     * @param string $_comoDescobriu
     * @param string $_complemento
     * @param dateTime $_dataCadastro
     * @param dateTime $_dataNascimento
     * @param string $_email
     * @param string $_estado
     * @param string $_fax
     * @param string $_iE
     * @param string $_iP
     * @param string $_logradouro
     * @param string $_nome
     * @param string $_nomeFantasia
     * @param string $_numero
     * @param string $_observacoes
     * @param string $_pais
     * @param string $_protocolo
     * @param string $_rG
     * @param string $_razaoSocial
     * @param boolean $_receberEmail
     * @param ClienteSexoEnum $_sexo
     * @param string $_telefone
     * @param string $_telefone2
     * @param TipoClienteEnum $_tipoCliente
     * @param string $_token
     * @return EzCatalogoStructCliente
     */
    public function __construct($_apelido = NULL,$_bairro = NULL,$_cEP = NULL,$_cNPJ = NULL,$_cPF = NULL,$_celular = NULL,$_cidade = NULL,$_clienteID = NULL,$_comoDescobriu = NULL,$_complemento = NULL,$_dataCadastro = NULL,$_dataNascimento = NULL,$_email = NULL,$_estado = NULL,$_fax = NULL,$_iE = NULL,$_iP = NULL,$_logradouro = NULL,$_nome = NULL,$_nomeFantasia = NULL,$_numero = NULL,$_observacoes = NULL,$_pais = NULL,$_protocolo = NULL,$_rG = NULL,$_razaoSocial = NULL,$_receberEmail = NULL,$_sexo = NULL,$_telefone = NULL,$_telefone2 = NULL,$_tipoCliente = NULL,$_token = NULL)
    {
        parent::__construct(array('Apelido'=>$_apelido,'Bairro'=>$_bairro,'CEP'=>$_cEP,'CNPJ'=>$_cNPJ,'CPF'=>$_cPF,'Celular'=>$_celular,'Cidade'=>$_cidade,'ClienteID'=>$_clienteID,'ComoDescobriu'=>$_comoDescobriu,'Complemento'=>$_complemento,'DataCadastro'=>$_dataCadastro,'DataNascimento'=>$_dataNascimento,'Email'=>$_email,'Estado'=>$_estado,'Fax'=>$_fax,'IE'=>$_iE,'IP'=>$_iP,'Logradouro'=>$_logradouro,'Nome'=>$_nome,'NomeFantasia'=>$_nomeFantasia,'Numero'=>$_numero,'Observacoes'=>$_observacoes,'Pais'=>$_pais,'Protocolo'=>$_protocolo,'RG'=>$_rG,'RazaoSocial'=>$_razaoSocial,'ReceberEmail'=>$_receberEmail,'Sexo'=>$_sexo,'Telefone'=>$_telefone,'Telefone2'=>$_telefone2,'TipoCliente'=>$_tipoCliente,'Token'=>$_token),false);
    }
    /**
     * Get Apelido value
     * @return string|null
     */
    public function getApelido()
    {
        return $this->Apelido;
    }
    /**
     * Set Apelido value
     * @param string $_apelido the Apelido
     * @return string
     */
    public function setApelido($_apelido)
    {
        return ($this->Apelido = $_apelido);
    }
    /**
     * Get Bairro value
     * @return string|null
     */
    public function getBairro()
    {
        return $this->Bairro;
    }
    /**
     * Set Bairro value
     * @param string $_bairro the Bairro
     * @return string
     */
    public function setBairro($_bairro)
    {
        return ($this->Bairro = $_bairro);
    }
    /**
     * Get CEP value
     * @return string|null
     */
    public function getCEP()
    {
        return $this->CEP;
    }
    /**
     * Set CEP value
     * @param string $_cEP the CEP
     * @return string
     */
    public function setCEP($_cEP)
    {
        return ($this->CEP = $_cEP);
    }
    /**
     * Get CNPJ value
     * @return string|null
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }
    /**
     * Set CNPJ value
     * @param string $_cNPJ the CNPJ
     * @return string
     */
    public function setCNPJ($_cNPJ)
    {
        return ($this->CNPJ = $_cNPJ);
    }
    /**
     * Get CPF value
     * @return string|null
     */
    public function getCPF()
    {
        return $this->CPF;
    }
    /**
     * Set CPF value
     * @param string $_cPF the CPF
     * @return string
     */
    public function setCPF($_cPF)
    {
        return ($this->CPF = $_cPF);
    }
    /**
     * Get Celular value
     * @return string|null
     */
    public function getCelular()
    {
        return $this->Celular;
    }
    /**
     * Set Celular value
     * @param string $_celular the Celular
     * @return string
     */
    public function setCelular($_celular)
    {
        return ($this->Celular = $_celular);
    }
    /**
     * Get Cidade value
     * @return string|null
     */
    public function getCidade()
    {
        return $this->Cidade;
    }
    /**
     * Set Cidade value
     * @param string $_cidade the Cidade
     * @return string
     */
    public function setCidade($_cidade)
    {
        return ($this->Cidade = $_cidade);
    }
    /**
     * Get ClienteID value
     * @return int|null
     */
    public function getClienteID()
    {
        return $this->ClienteID;
    }
    /**
     * Set ClienteID value
     * @param int $_clienteID the ClienteID
     * @return int
     */
    public function setClienteID($_clienteID)
    {
        return ($this->ClienteID = $_clienteID);
    }
    /**
     * Get ComoDescobriu value
     * @return string|null
     */
    public function getComoDescobriu()
    {
        return $this->ComoDescobriu;
    }
    /**
     * Set ComoDescobriu value
     * @param string $_comoDescobriu the ComoDescobriu
     * @return string
     */
    public function setComoDescobriu($_comoDescobriu)
    {
        return ($this->ComoDescobriu = $_comoDescobriu);
    }
    /**
     * Get Complemento value
     * @return string|null
     */
    public function getComplemento()
    {
        return $this->Complemento;
    }
    /**
     * Set Complemento value
     * @param string $_complemento the Complemento
     * @return string
     */
    public function setComplemento($_complemento)
    {
        return ($this->Complemento = $_complemento);
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
     * Get DataNascimento value
     * @return dateTime|null
     */
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }
    /**
     * Set DataNascimento value
     * @param dateTime $_dataNascimento the DataNascimento
     * @return dateTime
     */
    public function setDataNascimento($_dataNascimento)
    {
        return ($this->DataNascimento = $_dataNascimento);
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
     * Get Estado value
     * @return string|null
     */
    public function getEstado()
    {
        return $this->Estado;
    }
    /**
     * Set Estado value
     * @param string $_estado the Estado
     * @return string
     */
    public function setEstado($_estado)
    {
        return ($this->Estado = $_estado);
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $_fax the Fax
     * @return string
     */
    public function setFax($_fax)
    {
        return ($this->Fax = $_fax);
    }
    /**
     * Get IE value
     * @return string|null
     */
    public function getIE()
    {
        return $this->IE;
    }
    /**
     * Set IE value
     * @param string $_iE the IE
     * @return string
     */
    public function setIE($_iE)
    {
        return ($this->IE = $_iE);
    }
    /**
     * Get IP value
     * @return string|null
     */
    public function getIP()
    {
        return $this->IP;
    }
    /**
     * Set IP value
     * @param string $_iP the IP
     * @return string
     */
    public function setIP($_iP)
    {
        return ($this->IP = $_iP);
    }
    /**
     * Get Logradouro value
     * @return string|null
     */
    public function getLogradouro()
    {
        return $this->Logradouro;
    }
    /**
     * Set Logradouro value
     * @param string $_logradouro the Logradouro
     * @return string
     */
    public function setLogradouro($_logradouro)
    {
        return ($this->Logradouro = $_logradouro);
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
     * Get NomeFantasia value
     * @return string|null
     */
    public function getNomeFantasia()
    {
        return $this->NomeFantasia;
    }
    /**
     * Set NomeFantasia value
     * @param string $_nomeFantasia the NomeFantasia
     * @return string
     */
    public function setNomeFantasia($_nomeFantasia)
    {
        return ($this->NomeFantasia = $_nomeFantasia);
    }
    /**
     * Get Numero value
     * @return string|null
     */
    public function getNumero()
    {
        return $this->Numero;
    }
    /**
     * Set Numero value
     * @param string $_numero the Numero
     * @return string
     */
    public function setNumero($_numero)
    {
        return ($this->Numero = $_numero);
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
     * Get Pais value
     * @return string|null
     */
    public function getPais()
    {
        return $this->Pais;
    }
    /**
     * Set Pais value
     * @param string $_pais the Pais
     * @return string
     */
    public function setPais($_pais)
    {
        return ($this->Pais = $_pais);
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
     * Get RG value
     * @return string|null
     */
    public function getRG()
    {
        return $this->RG;
    }
    /**
     * Set RG value
     * @param string $_rG the RG
     * @return string
     */
    public function setRG($_rG)
    {
        return ($this->RG = $_rG);
    }
    /**
     * Get RazaoSocial value
     * @return string|null
     */
    public function getRazaoSocial()
    {
        return $this->RazaoSocial;
    }
    /**
     * Set RazaoSocial value
     * @param string $_razaoSocial the RazaoSocial
     * @return string
     */
    public function setRazaoSocial($_razaoSocial)
    {
        return ($this->RazaoSocial = $_razaoSocial);
    }
    /**
     * Get ReceberEmail value
     * @return boolean|null
     */
    public function getReceberEmail()
    {
        return $this->ReceberEmail;
    }
    /**
     * Set ReceberEmail value
     * @param boolean $_receberEmail the ReceberEmail
     * @return boolean
     */
    public function setReceberEmail($_receberEmail)
    {
        return ($this->ReceberEmail = $_receberEmail);
    }
    /**
     * Get Sexo value
     * @return ClienteSexoEnum|null
     */
    public function getSexo()
    {
        return $this->Sexo;
    }
    /**
     * Set Sexo value
     * @param ClienteSexoEnum $_sexo the Sexo
     * @return ClienteSexoEnum
     */
    public function setSexo($_sexo)
    {
        return ($this->Sexo = $_sexo);
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
     * Get Telefone2 value
     * @return string|null
     */
    public function getTelefone2()
    {
        return $this->Telefone2;
    }
    /**
     * Set Telefone2 value
     * @param string $_telefone2 the Telefone2
     * @return string
     */
    public function setTelefone2($_telefone2)
    {
        return ($this->Telefone2 = $_telefone2);
    }
    /**
     * Get TipoCliente value
     * @return TipoClienteEnum|null
     */
    public function getTipoCliente()
    {
        return $this->TipoCliente;
    }
    /**
     * Set TipoCliente value
     * @param TipoClienteEnum $_tipoCliente the TipoCliente
     * @return TipoClienteEnum
     */
    public function setTipoCliente($_tipoCliente)
    {
        return ($this->TipoCliente = $_tipoCliente);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $_token the Token
     * @return string
     */
    public function setToken($_token)
    {
        return ($this->Token = $_token);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructCliente
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
