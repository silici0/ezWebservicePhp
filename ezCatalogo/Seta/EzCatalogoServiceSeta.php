<?php
/**
 * File for class EzCatalogoServiceSeta
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoServiceSeta originally named Seta
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
class EzCatalogoServiceSeta extends EzCatalogoWsdlClass
{
    /**
     * Method to call the operation originally named SetaRelacaoMenuSecao
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSetaRelacaoMenuSecao $_ezCatalogoStructSetaRelacaoMenuSecao
     * @return EzCatalogoStructSetaRelacaoMenuSecaoResponse
     */
    public function SetaRelacaoMenuSecao(EzCatalogoStructSetaRelacaoMenuSecao $_ezCatalogoStructSetaRelacaoMenuSecao)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSetaRelacaoMenuSecaoResponse(self::getSoapClient()->SetaRelacaoMenuSecao($_ezCatalogoStructSetaRelacaoMenuSecao)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzCatalogoWsdlClass::getResult()
     * @return EzCatalogoStructSetaRelacaoMenuSecaoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
