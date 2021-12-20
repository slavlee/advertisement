<?php
declare(strict_types = 1);

return [
    \Slavlee\Advertisement\Domain\Model\Banner::class => [
        'tableName' => 'tt_content',
        'recordType' => 'advertisement_banner',
    	'properties' => [
    		'link' => [
    			'fieldName' => 'header_link'
    		]
    	]
    ],
];