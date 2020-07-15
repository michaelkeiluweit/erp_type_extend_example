<?php declare(strict_types=1);


namespace OxidSupport\Example;


class Article extends Product_parent
{
    protected $additionalFields = [
        'MYMCOLUMNA' => 'MYMCOLUMNA',
        'MYMCOLUMNB' => 'MYMCOLUMNB',
        'MYMCOLUMNC' => 'MYMCOLUMNC',
    ];
    public function __construct()
    {
        parent::__construct();
        $this->_sFunctionSuffix = 'Article';
        $this->_aFieldList = $this->_aFieldList + $this->additionalFields;
    }
}