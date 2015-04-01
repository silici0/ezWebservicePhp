<?php
/**
 * File for class EzClientesStructVariacao
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructVariacao originally named Variacao
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructVariacao extends EzClientesWsdlClass
{
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * The CodigoIntegracaoVariacao
     * @var string
     */
    public $CodigoIntegracaoVariacao;
    /**
     * The CodigosMercadoLivre
     * @var string
     */
    public $CodigosMercadoLivre;
    /**
     * The CodigosTodaOferta
     * @var string
     */
    public $CodigosTodaOferta;
    /**
     * The Cor
     * @var string
     */
    public $Cor;
    /**
     * The Disponivel
     * @var boolean
     */
    public $Disponivel;
    /**
     * The Ean
     * @var string
     */
    public $Ean;
    /**
     * The EstoqueAtual
     * @var int
     */
    public $EstoqueAtual;
    /**
     * The EstoqueMinimo
     * @var int
     */
    public $EstoqueMinimo;
    /**
     * The Foto
     * @var string
     */
    public $Foto;
    /**
     * The Mpn
     * @var string
     */
    public $Mpn;
    /**
     * The Nbm
     * @var string
     */
    public $Nbm;
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
     * The Peso
     * @var double
     */
    public $Peso;
    /**
     * The PesoCubico
     * @var double
     */
    public $PesoCubico;
    /**
     * The PrecoCustoVariacao
     * @var decimal
     */
    public $PrecoCustoVariacao;
    /**
     * The PrecoPromocaoVariacao
     * @var decimal
     */
    public $PrecoPromocaoVariacao;
    /**
     * The PrecoVariacao
     * @var decimal
     */
    public $PrecoVariacao;
    /**
     * The Promocao
     * @var boolean
     */
    public $Promocao;
    /**
     * The Referencia
     * @var string
     */
    public $Referencia;
    /**
     * Constructor method for Variacao
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @param string $_codigoIntegracaoVariacao
     * @param string $_codigosMercadoLivre
     * @param string $_codigosTodaOferta
     * @param string $_cor
     * @param boolean $_disponivel
     * @param string $_ean
     * @param int $_estoqueAtual
     * @param int $_estoqueMinimo
     * @param string $_foto
     * @param string $_mpn
     * @param string $_nbm
     * @param string $_nome
     * @param int $_ordem
     * @param double $_peso
     * @param double $_pesoCubico
     * @param decimal $_precoCustoVariacao
     * @param decimal $_precoPromocaoVariacao
     * @param decimal $_precoVariacao
     * @param boolean $_promocao
     * @param string $_referencia
     * @return EzClientesStructVariacao
     */
    public function __construct($_codigoIntegracao = NULL,$_codigoIntegracaoVariacao = NULL,$_codigosMercadoLivre = NULL,$_codigosTodaOferta = NULL,$_cor = NULL,$_disponivel = NULL,$_ean = NULL,$_estoqueAtual = NULL,$_estoqueMinimo = NULL,$_foto = NULL,$_mpn = NULL,$_nbm = NULL,$_nome = NULL,$_ordem = NULL,$_peso = NULL,$_pesoCubico = NULL,$_precoCustoVariacao = NULL,$_precoPromocaoVariacao = NULL,$_precoVariacao = NULL,$_promocao = NULL,$_referencia = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao,'CodigoIntegracaoVariacao'=>$_codigoIntegracaoVariacao,'CodigosMercadoLivre'=>$_codigosMercadoLivre,'CodigosTodaOferta'=>$_codigosTodaOferta,'Cor'=>$_cor,'Disponivel'=>$_disponivel,'Ean'=>$_ean,'EstoqueAtual'=>$_estoqueAtual,'EstoqueMinimo'=>$_estoqueMinimo,'Foto'=>$_foto,'Mpn'=>$_mpn,'Nbm'=>$_nbm,'Nome'=>$_nome,'Ordem'=>$_ordem,'Peso'=>$_peso,'PesoCubico'=>$_pesoCubico,'PrecoCustoVariacao'=>$_precoCustoVariacao,'PrecoPromocaoVariacao'=>$_precoPromocaoVariacao,'PrecoVariacao'=>$_precoVariacao,'Promocao'=>$_promocao,'Referencia'=>$_referencia),false);
    }
    /**
     * Get CodigoIntegracao value
     * @return string|null
     */
    public function getCodigoIntegracao()
    {
        return $this->CodigoIntegracao;
    }
    /**
     * Set CodigoIntegracao value
     * @param string $_codigoIntegracao the CodigoIntegracao
     * @return string
     */
    public function setCodigoIntegracao($_codigoIntegracao)
    {
        return ($this->CodigoIntegracao = $_codigoIntegracao);
    }
    /**
     * Get CodigoIntegracaoVariacao value
     * @return string|null
     */
    public function getCodigoIntegracaoVariacao()
    {
        return $this->CodigoIntegracaoVariacao;
    }
    /**
     * Set CodigoIntegracaoVariacao value
     * @param string $_codigoIntegracaoVariacao the CodigoIntegracaoVariacao
     * @return string
     */
    public function setCodigoIntegracaoVariacao($_codigoIntegracaoVariacao)
    {
        return ($this->CodigoIntegracaoVariacao = $_codigoIntegracaoVariacao);
    }
    /**
     * Get CodigosMercadoLivre value
     * @return string|null
     */
    public function getCodigosMercadoLivre()
    {
        return $this->CodigosMercadoLivre;
    }
    /**
     * Set CodigosMercadoLivre value
     * @param string $_codigosMercadoLivre the CodigosMercadoLivre
     * @return string
     */
    public function setCodigosMercadoLivre($_codigosMercadoLivre)
    {
        return ($this->CodigosMercadoLivre = $_codigosMercadoLivre);
    }
    /**
     * Get CodigosTodaOferta value
     * @return string|null
     */
    public function getCodigosTodaOferta()
    {
        return $this->CodigosTodaOferta;
    }
    /**
     * Set CodigosTodaOferta value
     * @param string $_codigosTodaOferta the CodigosTodaOferta
     * @return string
     */
    public function setCodigosTodaOferta($_codigosTodaOferta)
    {
        return ($this->CodigosTodaOferta = $_codigosTodaOferta);
    }
    /**
     * Get Cor value
     * @return string|null
     */
    public function getCor()
    {
        return $this->Cor;
    }
    /**
     * Set Cor value
     * @param string $_cor the Cor
     * @return string
     */
    public function setCor($_cor)
    {
        return ($this->Cor = $_cor);
    }
    /**
     * Get Disponivel value
     * @return boolean|null
     */
    public function getDisponivel()
    {
        return $this->Disponivel;
    }
    /**
     * Set Disponivel value
     * @param boolean $_disponivel the Disponivel
     * @return boolean
     */
    public function setDisponivel($_disponivel)
    {
        return ($this->Disponivel = $_disponivel);
    }
    /**
     * Get Ean value
     * @return string|null
     */
    public function getEan()
    {
        return $this->Ean;
    }
    /**
     * Set Ean value
     * @param string $_ean the Ean
     * @return string
     */
    public function setEan($_ean)
    {
        return ($this->Ean = $_ean);
    }
    /**
     * Get EstoqueAtual value
     * @return int|null
     */
    public function getEstoqueAtual()
    {
        return $this->EstoqueAtual;
    }
    /**
     * Set EstoqueAtual value
     * @param int $_estoqueAtual the EstoqueAtual
     * @return int
     */
    public function setEstoqueAtual($_estoqueAtual)
    {
        return ($this->EstoqueAtual = $_estoqueAtual);
    }
    /**
     * Get EstoqueMinimo value
     * @return int|null
     */
    public function getEstoqueMinimo()
    {
        return $this->EstoqueMinimo;
    }
    /**
     * Set EstoqueMinimo value
     * @param int $_estoqueMinimo the EstoqueMinimo
     * @return int
     */
    public function setEstoqueMinimo($_estoqueMinimo)
    {
        return ($this->EstoqueMinimo = $_estoqueMinimo);
    }
    /**
     * Get Foto value
     * @return string|null
     */
    public function getFoto()
    {
        return $this->Foto;
    }
    /**
     * Set Foto value
     * @param string $_foto the Foto
     * @return string
     */
    public function setFoto($_foto)
    {
        return ($this->Foto = $_foto);
    }
    /**
     * Get Mpn value
     * @return string|null
     */
    public function getMpn()
    {
        return $this->Mpn;
    }
    /**
     * Set Mpn value
     * @param string $_mpn the Mpn
     * @return string
     */
    public function setMpn($_mpn)
    {
        return ($this->Mpn = $_mpn);
    }
    /**
     * Get Nbm value
     * @return string|null
     */
    public function getNbm()
    {
        return $this->Nbm;
    }
    /**
     * Set Nbm value
     * @param string $_nbm the Nbm
     * @return string
     */
    public function setNbm($_nbm)
    {
        return ($this->Nbm = $_nbm);
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
     * Get Peso value
     * @return double|null
     */
    public function getPeso()
    {
        return $this->Peso;
    }
    /**
     * Set Peso value
     * @param double $_peso the Peso
     * @return double
     */
    public function setPeso($_peso)
    {
        return ($this->Peso = $_peso);
    }
    /**
     * Get PesoCubico value
     * @return double|null
     */
    public function getPesoCubico()
    {
        return $this->PesoCubico;
    }
    /**
     * Set PesoCubico value
     * @param double $_pesoCubico the PesoCubico
     * @return double
     */
    public function setPesoCubico($_pesoCubico)
    {
        return ($this->PesoCubico = $_pesoCubico);
    }
    /**
     * Get PrecoCustoVariacao value
     * @return decimal|null
     */
    public function getPrecoCustoVariacao()
    {
        return $this->PrecoCustoVariacao;
    }
    /**
     * Set PrecoCustoVariacao value
     * @param decimal $_precoCustoVariacao the PrecoCustoVariacao
     * @return decimal
     */
    public function setPrecoCustoVariacao($_precoCustoVariacao)
    {
        return ($this->PrecoCustoVariacao = $_precoCustoVariacao);
    }
    /**
     * Get PrecoPromocaoVariacao value
     * @return decimal|null
     */
    public function getPrecoPromocaoVariacao()
    {
        return $this->PrecoPromocaoVariacao;
    }
    /**
     * Set PrecoPromocaoVariacao value
     * @param decimal $_precoPromocaoVariacao the PrecoPromocaoVariacao
     * @return decimal
     */
    public function setPrecoPromocaoVariacao($_precoPromocaoVariacao)
    {
        return ($this->PrecoPromocaoVariacao = $_precoPromocaoVariacao);
    }
    /**
     * Get PrecoVariacao value
     * @return decimal|null
     */
    public function getPrecoVariacao()
    {
        return $this->PrecoVariacao;
    }
    /**
     * Set PrecoVariacao value
     * @param decimal $_precoVariacao the PrecoVariacao
     * @return decimal
     */
    public function setPrecoVariacao($_precoVariacao)
    {
        return ($this->PrecoVariacao = $_precoVariacao);
    }
    /**
     * Get Promocao value
     * @return boolean|null
     */
    public function getPromocao()
    {
        return $this->Promocao;
    }
    /**
     * Set Promocao value
     * @param boolean $_promocao the Promocao
     * @return boolean
     */
    public function setPromocao($_promocao)
    {
        return ($this->Promocao = $_promocao);
    }
    /**
     * Get Referencia value
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }
    /**
     * Set Referencia value
     * @param string $_referencia the Referencia
     * @return string
     */
    public function setReferencia($_referencia)
    {
        return ($this->Referencia = $_referencia);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructVariacao
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
