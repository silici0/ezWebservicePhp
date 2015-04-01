<?php
/**
 * File for class EzCatalogoStructCupomDesconto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructCupomDesconto originally named CupomDesconto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructCupomDesconto extends EzCatalogoWsdlClass
{
    /**
     * The Ativo
     * @var boolean
     */
    public $Ativo;
    /**
     * The Clube
     * @var boolean
     */
    public $Clube;
    /**
     * The ClubePalavraChave
     * @var string
     */
    public $ClubePalavraChave;
    /**
     * The ClubeTemplate
     * @var string
     */
    public $ClubeTemplate;
    /**
     * The ClubeTitulo
     * @var string
     */
    public $ClubeTitulo;
    /**
     * The Cupom
     * @var string
     */
    public $Cupom;
    /**
     * The DataFim
     * @var dateTime
     */
    public $DataFim;
    /**
     * The DataInicio
     * @var dateTime
     */
    public $DataInicio;
    /**
     * The Desconto
     * @var boolean
     */
    public $Desconto;
    /**
     * The FreteGratis
     * @var boolean
     */
    public $FreteGratis;
    /**
     * The LimiteUso
     * @var LimiteUsoEnum
     */
    public $LimiteUso;
    /**
     * The Produtos
     * @var EzCatalogoStructArrayOfstring
     */
    public $Produtos;
    /**
     * The TipoDesconto
     * @var TipoDescontoEnum
     */
    public $TipoDesconto;
    /**
     * The Titulo
     * @var string
     */
    public $Titulo;
    /**
     * The ValorDesconto
     * @var decimal
     */
    public $ValorDesconto;
    /**
     * The ValorMinimo
     * @var decimal
     */
    public $ValorMinimo;
    /**
     * Constructor method for CupomDesconto
     * @see parent::__construct()
     * @param boolean $_ativo
     * @param boolean $_clube
     * @param string $_clubePalavraChave
     * @param string $_clubeTemplate
     * @param string $_clubeTitulo
     * @param string $_cupom
     * @param dateTime $_dataFim
     * @param dateTime $_dataInicio
     * @param boolean $_desconto
     * @param boolean $_freteGratis
     * @param LimiteUsoEnum $_limiteUso
     * @param EzCatalogoStructArrayOfstring $_produtos
     * @param TipoDescontoEnum $_tipoDesconto
     * @param string $_titulo
     * @param decimal $_valorDesconto
     * @param decimal $_valorMinimo
     * @return EzCatalogoStructCupomDesconto
     */
    public function __construct($_ativo = NULL,$_clube = NULL,$_clubePalavraChave = NULL,$_clubeTemplate = NULL,$_clubeTitulo = NULL,$_cupom = NULL,$_dataFim = NULL,$_dataInicio = NULL,$_desconto = NULL,$_freteGratis = NULL,$_limiteUso = NULL,$_produtos = NULL,$_tipoDesconto = NULL,$_titulo = NULL,$_valorDesconto = NULL,$_valorMinimo = NULL)
    {
        parent::__construct(array('Ativo'=>$_ativo,'Clube'=>$_clube,'ClubePalavraChave'=>$_clubePalavraChave,'ClubeTemplate'=>$_clubeTemplate,'ClubeTitulo'=>$_clubeTitulo,'Cupom'=>$_cupom,'DataFim'=>$_dataFim,'DataInicio'=>$_dataInicio,'Desconto'=>$_desconto,'FreteGratis'=>$_freteGratis,'LimiteUso'=>$_limiteUso,'Produtos'=>($_produtos instanceof EzCatalogoStructArrayOfstring)?$_produtos:new EzCatalogoStructArrayOfstring($_produtos),'TipoDesconto'=>$_tipoDesconto,'Titulo'=>$_titulo,'ValorDesconto'=>$_valorDesconto,'ValorMinimo'=>$_valorMinimo),false);
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
     * Get Clube value
     * @return boolean|null
     */
    public function getClube()
    {
        return $this->Clube;
    }
    /**
     * Set Clube value
     * @param boolean $_clube the Clube
     * @return boolean
     */
    public function setClube($_clube)
    {
        return ($this->Clube = $_clube);
    }
    /**
     * Get ClubePalavraChave value
     * @return string|null
     */
    public function getClubePalavraChave()
    {
        return $this->ClubePalavraChave;
    }
    /**
     * Set ClubePalavraChave value
     * @param string $_clubePalavraChave the ClubePalavraChave
     * @return string
     */
    public function setClubePalavraChave($_clubePalavraChave)
    {
        return ($this->ClubePalavraChave = $_clubePalavraChave);
    }
    /**
     * Get ClubeTemplate value
     * @return string|null
     */
    public function getClubeTemplate()
    {
        return $this->ClubeTemplate;
    }
    /**
     * Set ClubeTemplate value
     * @param string $_clubeTemplate the ClubeTemplate
     * @return string
     */
    public function setClubeTemplate($_clubeTemplate)
    {
        return ($this->ClubeTemplate = $_clubeTemplate);
    }
    /**
     * Get ClubeTitulo value
     * @return string|null
     */
    public function getClubeTitulo()
    {
        return $this->ClubeTitulo;
    }
    /**
     * Set ClubeTitulo value
     * @param string $_clubeTitulo the ClubeTitulo
     * @return string
     */
    public function setClubeTitulo($_clubeTitulo)
    {
        return ($this->ClubeTitulo = $_clubeTitulo);
    }
    /**
     * Get Cupom value
     * @return string|null
     */
    public function getCupom()
    {
        return $this->Cupom;
    }
    /**
     * Set Cupom value
     * @param string $_cupom the Cupom
     * @return string
     */
    public function setCupom($_cupom)
    {
        return ($this->Cupom = $_cupom);
    }
    /**
     * Get DataFim value
     * @return dateTime|null
     */
    public function getDataFim()
    {
        return $this->DataFim;
    }
    /**
     * Set DataFim value
     * @param dateTime $_dataFim the DataFim
     * @return dateTime
     */
    public function setDataFim($_dataFim)
    {
        return ($this->DataFim = $_dataFim);
    }
    /**
     * Get DataInicio value
     * @return dateTime|null
     */
    public function getDataInicio()
    {
        return $this->DataInicio;
    }
    /**
     * Set DataInicio value
     * @param dateTime $_dataInicio the DataInicio
     * @return dateTime
     */
    public function setDataInicio($_dataInicio)
    {
        return ($this->DataInicio = $_dataInicio);
    }
    /**
     * Get Desconto value
     * @return boolean|null
     */
    public function getDesconto()
    {
        return $this->Desconto;
    }
    /**
     * Set Desconto value
     * @param boolean $_desconto the Desconto
     * @return boolean
     */
    public function setDesconto($_desconto)
    {
        return ($this->Desconto = $_desconto);
    }
    /**
     * Get FreteGratis value
     * @return boolean|null
     */
    public function getFreteGratis()
    {
        return $this->FreteGratis;
    }
    /**
     * Set FreteGratis value
     * @param boolean $_freteGratis the FreteGratis
     * @return boolean
     */
    public function setFreteGratis($_freteGratis)
    {
        return ($this->FreteGratis = $_freteGratis);
    }
    /**
     * Get LimiteUso value
     * @return LimiteUsoEnum|null
     */
    public function getLimiteUso()
    {
        return $this->LimiteUso;
    }
    /**
     * Set LimiteUso value
     * @param LimiteUsoEnum $_limiteUso the LimiteUso
     * @return LimiteUsoEnum
     */
    public function setLimiteUso($_limiteUso)
    {
        return ($this->LimiteUso = $_limiteUso);
    }
    /**
     * Get Produtos value
     * @return EzCatalogoStructArrayOfstring|null
     */
    public function getProdutos()
    {
        return $this->Produtos;
    }
    /**
     * Set Produtos value
     * @param EzCatalogoStructArrayOfstring $_produtos the Produtos
     * @return EzCatalogoStructArrayOfstring
     */
    public function setProdutos($_produtos)
    {
        return ($this->Produtos = $_produtos);
    }
    /**
     * Get TipoDesconto value
     * @return TipoDescontoEnum|null
     */
    public function getTipoDesconto()
    {
        return $this->TipoDesconto;
    }
    /**
     * Set TipoDesconto value
     * @param TipoDescontoEnum $_tipoDesconto the TipoDesconto
     * @return TipoDescontoEnum
     */
    public function setTipoDesconto($_tipoDesconto)
    {
        return ($this->TipoDesconto = $_tipoDesconto);
    }
    /**
     * Get Titulo value
     * @return string|null
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }
    /**
     * Set Titulo value
     * @param string $_titulo the Titulo
     * @return string
     */
    public function setTitulo($_titulo)
    {
        return ($this->Titulo = $_titulo);
    }
    /**
     * Get ValorDesconto value
     * @return decimal|null
     */
    public function getValorDesconto()
    {
        return $this->ValorDesconto;
    }
    /**
     * Set ValorDesconto value
     * @param decimal $_valorDesconto the ValorDesconto
     * @return decimal
     */
    public function setValorDesconto($_valorDesconto)
    {
        return ($this->ValorDesconto = $_valorDesconto);
    }
    /**
     * Get ValorMinimo value
     * @return decimal|null
     */
    public function getValorMinimo()
    {
        return $this->ValorMinimo;
    }
    /**
     * Set ValorMinimo value
     * @param decimal $_valorMinimo the ValorMinimo
     * @return decimal
     */
    public function setValorMinimo($_valorMinimo)
    {
        return ($this->ValorMinimo = $_valorMinimo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructCupomDesconto
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
