<?php
/**
 * File for class EzCatalogoStructSetaRelacaoMenuSecaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSetaRelacaoMenuSecaoResponse originally named SetaRelacaoMenuSecaoResponse
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSetaRelacaoMenuSecaoResponse extends EzCatalogoWsdlClass
{
    /**
     * The SetaRelacaoMenuSecaoResult
     * @var EzCatalogoStructRespostaProcessamento
     */
    public $SetaRelacaoMenuSecaoResult;
    /**
     * Constructor method for SetaRelacaoMenuSecaoResponse
     * @see parent::__construct()
     * @param EzCatalogoStructRespostaProcessamento $_setaRelacaoMenuSecaoResult
     * @return EzCatalogoStructSetaRelacaoMenuSecaoResponse
     */
    public function __construct($_setaRelacaoMenuSecaoResult = NULL)
    {
        parent::__construct(array('SetaRelacaoMenuSecaoResult'=>$_setaRelacaoMenuSecaoResult),false);
    }
    /**
     * Get SetaRelacaoMenuSecaoResult value
     * @return EzCatalogoStructRespostaProcessamento|null
     */
    public function getSetaRelacaoMenuSecaoResult()
    {
        return $this->SetaRelacaoMenuSecaoResult;
    }
    /**
     * Set SetaRelacaoMenuSecaoResult value
     * @param EzCatalogoStructRespostaProcessamento $_setaRelacaoMenuSecaoResult the SetaRelacaoMenuSecaoResult
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function setSetaRelacaoMenuSecaoResult($_setaRelacaoMenuSecaoResult)
    {
        return ($this->SetaRelacaoMenuSecaoResult = $_setaRelacaoMenuSecaoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSetaRelacaoMenuSecaoResponse
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
