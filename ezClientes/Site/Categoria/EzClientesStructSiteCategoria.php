<?php
/**
 * File for class EzClientesStructSiteCategoria
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructSiteCategoria originally named SiteCategoria
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructSiteCategoria extends EzClientesWsdlClass
{
    /**
     * The Ativo
     * @var boolean
     */
    public $Ativo;
    /**
     * The Descricao
     * @var string
     */
    public $Descricao;
    /**
     * The MetaDescription
     * @var string
     */
    public $MetaDescription;
    /**
     * The MetaTitle
     * @var string
     */
    public $MetaTitle;
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
     * The PalavrasChave
     * @var string
     */
    public $PalavrasChave;
    /**
     * The Redirecionar
     * @var boolean
     */
    public $Redirecionar;
    /**
     * The SiteCategoriaID
     * @var int
     */
    public $SiteCategoriaID;
    /**
     * The SiteCategoriaPaiId
     * @var int
     */
    public $SiteCategoriaPaiId;
    /**
     * The Url
     * @var string
     */
    public $Url;
    /**
     * The VisualizaLogado
     * @var int
     */
    public $VisualizaLogado;
    /**
     * Constructor method for SiteCategoria
     * @see parent::__construct()
     * @param boolean $_ativo
     * @param string $_descricao
     * @param string $_metaDescription
     * @param string $_metaTitle
     * @param string $_nome
     * @param int $_ordem
     * @param string $_palavrasChave
     * @param boolean $_redirecionar
     * @param int $_siteCategoriaID
     * @param int $_siteCategoriaPaiId
     * @param string $_url
     * @param int $_visualizaLogado
     * @return EzClientesStructSiteCategoria
     */
    public function __construct($_ativo = NULL,$_descricao = NULL,$_metaDescription = NULL,$_metaTitle = NULL,$_nome = NULL,$_ordem = NULL,$_palavrasChave = NULL,$_redirecionar = NULL,$_siteCategoriaID = NULL,$_siteCategoriaPaiId = NULL,$_url = NULL,$_visualizaLogado = NULL)
    {
        parent::__construct(array('Ativo'=>$_ativo,'Descricao'=>$_descricao,'MetaDescription'=>$_metaDescription,'MetaTitle'=>$_metaTitle,'Nome'=>$_nome,'Ordem'=>$_ordem,'PalavrasChave'=>$_palavrasChave,'Redirecionar'=>$_redirecionar,'SiteCategoriaID'=>$_siteCategoriaID,'SiteCategoriaPaiId'=>$_siteCategoriaPaiId,'Url'=>$_url,'VisualizaLogado'=>$_visualizaLogado),false);
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
     * Get Descricao value
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }
    /**
     * Set Descricao value
     * @param string $_descricao the Descricao
     * @return string
     */
    public function setDescricao($_descricao)
    {
        return ($this->Descricao = $_descricao);
    }
    /**
     * Get MetaDescription value
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->MetaDescription;
    }
    /**
     * Set MetaDescription value
     * @param string $_metaDescription the MetaDescription
     * @return string
     */
    public function setMetaDescription($_metaDescription)
    {
        return ($this->MetaDescription = $_metaDescription);
    }
    /**
     * Get MetaTitle value
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->MetaTitle;
    }
    /**
     * Set MetaTitle value
     * @param string $_metaTitle the MetaTitle
     * @return string
     */
    public function setMetaTitle($_metaTitle)
    {
        return ($this->MetaTitle = $_metaTitle);
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
     * Get PalavrasChave value
     * @return string|null
     */
    public function getPalavrasChave()
    {
        return $this->PalavrasChave;
    }
    /**
     * Set PalavrasChave value
     * @param string $_palavrasChave the PalavrasChave
     * @return string
     */
    public function setPalavrasChave($_palavrasChave)
    {
        return ($this->PalavrasChave = $_palavrasChave);
    }
    /**
     * Get Redirecionar value
     * @return boolean|null
     */
    public function getRedirecionar()
    {
        return $this->Redirecionar;
    }
    /**
     * Set Redirecionar value
     * @param boolean $_redirecionar the Redirecionar
     * @return boolean
     */
    public function setRedirecionar($_redirecionar)
    {
        return ($this->Redirecionar = $_redirecionar);
    }
    /**
     * Get SiteCategoriaID value
     * @return int|null
     */
    public function getSiteCategoriaID()
    {
        return $this->SiteCategoriaID;
    }
    /**
     * Set SiteCategoriaID value
     * @param int $_siteCategoriaID the SiteCategoriaID
     * @return int
     */
    public function setSiteCategoriaID($_siteCategoriaID)
    {
        return ($this->SiteCategoriaID = $_siteCategoriaID);
    }
    /**
     * Get SiteCategoriaPaiId value
     * @return int|null
     */
    public function getSiteCategoriaPaiId()
    {
        return $this->SiteCategoriaPaiId;
    }
    /**
     * Set SiteCategoriaPaiId value
     * @param int $_siteCategoriaPaiId the SiteCategoriaPaiId
     * @return int
     */
    public function setSiteCategoriaPaiId($_siteCategoriaPaiId)
    {
        return ($this->SiteCategoriaPaiId = $_siteCategoriaPaiId);
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
     * Get VisualizaLogado value
     * @return int|null
     */
    public function getVisualizaLogado()
    {
        return $this->VisualizaLogado;
    }
    /**
     * Set VisualizaLogado value
     * @param int $_visualizaLogado the VisualizaLogado
     * @return int
     */
    public function setVisualizaLogado($_visualizaLogado)
    {
        return ($this->VisualizaLogado = $_visualizaLogado);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructSiteCategoria
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
