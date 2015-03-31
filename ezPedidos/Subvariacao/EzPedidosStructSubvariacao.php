<?php
/**
 * File for class EzPedidosStructSubvariacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructSubvariacao originally named Subvariacao
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructSubvariacao extends EzPedidosWsdlClass
{
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * The CodigoIntegracaoSubVariacao
     * @var string
     */
    public $CodigoIntegracaoSubVariacao;
    /**
     * The CodigoIntegracaoVariacao
     * @var string
     */
    public $CodigoIntegracaoVariacao;
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
     * The PrecoCustoSubVariacao
     * @var decimal
     */
    public $PrecoCustoSubVariacao;
    /**
     * The PrecoPromocaoSubVariacao
     * @var decimal
     */
    public $PrecoPromocaoSubVariacao;
    /**
     * The PrecoSubVariacao
     * @var decimal
     */
    public $PrecoSubVariacao;
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
     * Constructor method for Subvariacao
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @param string $_codigoIntegracaoSubVariacao
     * @param string $_codigoIntegracaoVariacao
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
     * @param decimal $_precoCustoSubVariacao
     * @param decimal $_precoPromocaoSubVariacao
     * @param decimal $_precoSubVariacao
     * @param boolean $_promocao
     * @param string $_referencia
     * @return EzPedidosStructSubvariacao
     */
    public function __construct($_codigoIntegracao = NULL,$_codigoIntegracaoSubVariacao = NULL,$_codigoIntegracaoVariacao = NULL,$_disponivel = NULL,$_ean = NULL,$_estoqueAtual = NULL,$_estoqueMinimo = NULL,$_foto = NULL,$_mpn = NULL,$_nbm = NULL,$_nome = NULL,$_ordem = NULL,$_peso = NULL,$_pesoCubico = NULL,$_precoCustoSubVariacao = NULL,$_precoPromocaoSubVariacao = NULL,$_precoSubVariacao = NULL,$_promocao = NULL,$_referencia = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao,'CodigoIntegracaoSubVariacao'=>$_codigoIntegracaoSubVariacao,'CodigoIntegracaoVariacao'=>$_codigoIntegracaoVariacao,'Disponivel'=>$_disponivel,'Ean'=>$_ean,'EstoqueAtual'=>$_estoqueAtual,'EstoqueMinimo'=>$_estoqueMinimo,'Foto'=>$_foto,'Mpn'=>$_mpn,'Nbm'=>$_nbm,'Nome'=>$_nome,'Ordem'=>$_ordem,'Peso'=>$_peso,'PesoCubico'=>$_pesoCubico,'PrecoCustoSubVariacao'=>$_precoCustoSubVariacao,'PrecoPromocaoSubVariacao'=>$_precoPromocaoSubVariacao,'PrecoSubVariacao'=>$_precoSubVariacao,'Promocao'=>$_promocao,'Referencia'=>$_referencia),false);
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
     * Get CodigoIntegracaoSubVariacao value
     * @return string|null
     */
    public function getCodigoIntegracaoSubVariacao()
    {
        return $this->CodigoIntegracaoSubVariacao;
    }
    /**
     * Set CodigoIntegracaoSubVariacao value
     * @param string $_codigoIntegracaoSubVariacao the CodigoIntegracaoSubVariacao
     * @return string
     */
    public function setCodigoIntegracaoSubVariacao($_codigoIntegracaoSubVariacao)
    {
        return ($this->CodigoIntegracaoSubVariacao = $_codigoIntegracaoSubVariacao);
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
     * Get PrecoCustoSubVariacao value
     * @return decimal|null
     */
    public function getPrecoCustoSubVariacao()
    {
        return $this->PrecoCustoSubVariacao;
    }
    /**
     * Set PrecoCustoSubVariacao value
     * @param decimal $_precoCustoSubVariacao the PrecoCustoSubVariacao
     * @return decimal
     */
    public function setPrecoCustoSubVariacao($_precoCustoSubVariacao)
    {
        return ($this->PrecoCustoSubVariacao = $_precoCustoSubVariacao);
    }
    /**
     * Get PrecoPromocaoSubVariacao value
     * @return decimal|null
     */
    public function getPrecoPromocaoSubVariacao()
    {
        return $this->PrecoPromocaoSubVariacao;
    }
    /**
     * Set PrecoPromocaoSubVariacao value
     * @param decimal $_precoPromocaoSubVariacao the PrecoPromocaoSubVariacao
     * @return decimal
     */
    public function setPrecoPromocaoSubVariacao($_precoPromocaoSubVariacao)
    {
        return ($this->PrecoPromocaoSubVariacao = $_precoPromocaoSubVariacao);
    }
    /**
     * Get PrecoSubVariacao value
     * @return decimal|null
     */
    public function getPrecoSubVariacao()
    {
        return $this->PrecoSubVariacao;
    }
    /**
     * Set PrecoSubVariacao value
     * @param decimal $_precoSubVariacao the PrecoSubVariacao
     * @return decimal
     */
    public function setPrecoSubVariacao($_precoSubVariacao)
    {
        return ($this->PrecoSubVariacao = $_precoSubVariacao);
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
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructSubvariacao
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
