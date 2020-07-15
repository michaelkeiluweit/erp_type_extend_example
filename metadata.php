<?php
/**
 * This Software is the property of OXID eSales and is protected
 * by copyright law.
 *
 * Any unauthorized use of this software will be prosecuted by
 * civil and criminal law.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 * @version   OXID eSales Visual CMS
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxsexample',
    'title'       => 'Example',
    'description' => [
        'de' => '',
        'en' => '',
    ],
    'thumbnail'   => '',
    'version'     => '',
    'author'      => '',
    'url'         => '',
    'email'       => '',
    'extend'      => [
        'oxerptype_article'  => \OxidSupport\Example\Article::class,
        'oxerpsoapgateway' => \OxidSupport\Example\ErpSoapGateway::class,
    ]
];
