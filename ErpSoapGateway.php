<?php declare(strict_types=1);


namespace OxidSupport\Example;


class ErpSoapGateway extends ErpSoapGateway_parent
{
    public function OXERPSetMyErpType($parameters)
    {
        $object = $this->_formatInput($parameters->myErpType);
        return $this->_import(Article::class, $object);
    }

    public function OXERPGetMyErpType($parameters)
    {
        $where = ''; //enter condition here
        return $this->_export(Article::class, $where);
    }

    public function OXERPDeleteMyErpType($parameters)
    {
        return $this->_delete(Article::class, [$parameters->identifier]);
    }
}
